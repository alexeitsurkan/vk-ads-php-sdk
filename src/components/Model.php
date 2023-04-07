<?php

namespace VkAdsPhpSdk\components;

use ReflectionClass;
use VkAdsPhpSdk\exceptions\UnknownPropertyException;

abstract class Model
{
    /**
     * Model constructor.
     *
     * @param array $config
     *
     * @throws UnknownPropertyException
     */
    public function __construct(array $config = [])
    {
        if (\count($config) > 0) {
            foreach ($config as $name => $value) {
                if (property_exists(static::class, $name)) {
                    $this->$name = $value;
                } else {
                    throw new UnknownPropertyException(
                        'Свойство ' . $name . ' не существует в классе ' . static::class
                    );
                }
            }
        }
    }

    /**
     * get all property
     * @return array
     */
    public static function getProperties(): array
    {
        $r = new ReflectionClass(static::class);
        return array_column($r->getProperties(),'name');
    }
}