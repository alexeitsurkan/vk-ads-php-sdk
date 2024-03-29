<?php

namespace VkAdsPhpSdk\components;

use GuzzleHttp\BodySummarizer;
use GuzzleHttp\Middleware;
use GuzzleHttp\RequestOptions;
use VkAdsPhpSdk\exceptions\VkAdsApiException;
use VkAdsPhpSdk\exceptions\VkAdsModelValidationException;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use JsonMapper;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\ValidatorInterface;

abstract class BaseService
{
    protected const BASE_URI = 'https://ads.vk.com/';

    /**
     * @var JsonMapper
     */
    private $mapper;

    /**
     * @var ValidatorInterface
     */
    private $validator;

    /**
     * @var Client
     */
    protected $http_client;

    public function __construct(protected $token = null)
    {
        $handlerStack = HandlerStack::create();
        $handlerStack->push(Middleware::httpErrors(new BodySummarizer(9999)), 'http_errors');
        $this->http_client = new Client(
            [
                'base_uri' => self::BASE_URI,
                'handler' => $handlerStack,
            ]
        );
    }

    /**
     * @param string $uri
     * @param string|null $class
     * @param SelectionCriteria|null $selectionCriteria
     * @return mixed
     * @throws VkAdsApiException
     */
    protected function doGet(
        string $uri,
        string $class = null,
        SelectionCriteria $selectionCriteria = null
    ): mixed {
        $uri = $selectionCriteria
            ? Uri::withQueryValues(new Uri($uri), $selectionCriteria())
            : $uri;

        $response = $this->call('get', $uri, [RequestOptions::HEADERS => $this->getHeaders()]);
        if ($class) {
            if (isset($response->body['items'])){
                $response->body['items'] = $this->mapArray($response->body['items'], $class);
            }else{
                return $this->map($response->body, $class);
            }
        }

        return $response->body;
    }

    protected function doPost(string $uri, Model|array $model): ?array
    {
        $this->validate([$model]);
        $options = [
            RequestOptions::HEADERS => $this->getHeaders(),
            RequestOptions::BODY    => $this->getBody($model)
        ];

        return $this
            ->call('post', $uri, $options)
            ->body;
    }

    /**
     * @param string $uri
     * @param Model[] $models
     * @return bool
     * @throws VkAdsApiException
     */
    protected function doMassUpdate(string $uri, array $models): bool
    {
        $this->validate($models);
        $options = [
            RequestOptions::HEADERS => $this->getHeaders(),
            RequestOptions::BODY    => $this->getBody($models)
        ];
        $this->call('post', $uri, $options);

        return true;
    }

    /**
     * @param string $uri
     * @return bool
     * @throws VkAdsApiException
     */
    protected function doDelete(string $uri): bool
    {
        $this->call('delete', $uri, [
            RequestOptions::HEADERS => $this->getHeaders(),
        ]);

        return true;
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $options
     * @return VkAdsApiResponse
     * @throws VkAdsApiException
     */
    protected function call(string $method, string $uri, array $options): VkAdsApiResponse
    {
        $count_attempts = 0;
        while (true){
            try {
                $httpResponse = $this->http_client->send(new Request($method, $uri), $options);
            } catch (GuzzleException $exception) {
                if($exception->getCode() === 429 && $count_attempts < 20){
                    sleep(1);
                    $count_attempts++;
                    continue;
                }
                throw new VkAdsApiException(
                    $exception->getMessage(),
                    $exception->getCode(),
                    $exception
                );
            }
            $response         = new VkAdsApiResponse();
            $response->header = $httpResponse->getHeaders();
            $response->body   = json_decode($httpResponse->getBody()->getContents(), true);
            return $response;
        }
    }

    /**
     * @return string[]
     */
    protected function getHeaders(): array
    {
        $headers = [
            'Content-Type'    => 'application/json;',
//            'Content-Length'  => '1000000',
            'Authorization'   => 'Bearer ' . $this->token,
//            'Accept-Encoding' => 'identity',
//            'Accept-Language' => 'ru-RU,ru;q=0.9,en-US;q=0.8'
        ];

        return $headers;
    }

    protected function getBody(array|Model $data): string
    {
        $json = json_encode($data, JSON_UNESCAPED_UNICODE);
        return preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', $json);
    }

    private function validate(array $models)
    {
        foreach ($models as $key => $model) {
            $result = $this->getValidator()->validate($model);
            if ($result) {
                foreach ($result as $error) {
                    if (!isset($errors[$key])) {
                        $errors[$key] = [];
                    }
                    /**
                     * @var ConstraintViolation $error
                     */
                    $errors[$key][$error->getPropertyPath()] = $error->getMessage();
                }
            }
        }
        if (!empty($errors)) {
            throw new VkAdsModelValidationException($errors);
        }
    }

    private function getMapper(): JsonMapper
    {
        if (!$this->mapper) {
            $this->mapper                             = new JsonMapper();
            $this->mapper->bStrictNullTypes           = false;
            $this->mapper->bEnforceMapType            = false;
            $this->mapper->bRemoveUndefinedAttributes = true;
        }

        return $this->mapper;
    }

    /**
     * @return ValidatorInterface
     */
    private function getValidator(): ValidatorInterface
    {
        if (!$this->validator) {
            $this->validator = Validation::createValidatorBuilder()
                ->enableAnnotationMapping()
                ->getValidator()
            ;
        }
        return $this->validator;
    }

    protected function mapArray(array $data, string $class): array
    {
        return $this->getMapper()->mapArray($data, [], $class);
    }

    protected function map(array $data, string $class): mixed
    {
        return $this->getMapper()->map($data, new $class());
    }

}