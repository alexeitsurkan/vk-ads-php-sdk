<?php

namespace VkAdsPhpSdk\components;

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
}