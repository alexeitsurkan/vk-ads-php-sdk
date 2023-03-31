<?php

namespace app\vk_ads_api\src\components;

abstract class SelectionCriteria extends Model
{
    /**
     * возвращает массив параметров для запроса
     * @return array
     */
    public function __invoke(): array
    {
        $result = [];
        foreach ($this as $key => $value) {
            if ($value === null) {
                continue;
            }
            if (is_array($value)) {
                $value = implode(',', $value);
            }
            $result[$key] = $value;
        }

        return $result;
    }
}