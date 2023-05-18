<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class AdGroupUpdateItem extends Model
{
    /**
     * @var string Название группы
     */
    public $name;

    /**
     * @var string Статус группы.
     * [Assert\Choice(['active', 'deleted', 'blocked'])]
     */
    public $status;

    /**
     * @var int Идентификатор кампании
     * @Assert\Range(
     *     min=1,
     *     max=2147483647
     * )
     */
    public $ad_plan_id;

    /**
     * @var int Идентификатор пакета
     * @Assert\Range(
     *     min=1,
     *     max=2147483647
     * )
     */
    public $package_id;

    /**
     * @var string Возрастные ограничения. Валидируются по такому шаблону ^[1-9]?[0-9]\\+$
     */
    public $age_restrictions;

    /**
     * @var AuditPixel[] Список пикселей аудита
     */
    public $audit_pixels;

    /**
     * @var string Аукционная стратегия
     */
    public $autobidding_mode;

    /**
     * @var int Количество уникальных показов для баннеров
     * @Assert\Range(
     *     max=2147483647
     * )
     */
    public $banner_uniq_shows_limit;

    /**
     * @var float Общий бюджет группы
     */
    public $budget_limit;

    /**
     * @var float Дневной бюджет группы
     */
    public $budget_limit_day;

    /**
     * @var string Дата окончания группы
     * [Assert\Date]
     */
    public $date_end;

    /**
     * @var string Дата старта группы
     * [Assert\Date]
     */
    public $date_start;

    /**
     * @var bool Отображать ли deeplink в мобильном динамическом ремаркетинге
     */
    public $dynamic_banners_use_storelink;

    /**
     * @var bool Возможность показывать баннеры динамического ремаркетинга без наличия событий динамического ремаркетинга
     */
    public $dynamic_without_remarketing;

    /**
     * @var bool Учитывать оффлайн конверсии для группы
     */
    public $enable_offline_goals;

    /**
     * @var bool Добавлять ли UTM-метки в URL объявлений
     */
    public $enable_utm;

    /**
     * @var string Язык креативов в группы
     * [Assert\Choice(['ru', 'en'])]
     */
    public $language;

    /**
     * @var string ID приложения, которое будет управлять группой
     */
    public $marketplace_app_client_id;

    /**
     * @var float Верхняя граница для автоматического регулирования цены
     * @Assert\Range(
     *     max=21474836
     * )
     */
    public $max_price;

    /**
     * @var string Цель рекламной группы, должна соответствовать одной из целей, определенных в package.objective
     */
    public $objective;

    /**
     * @var float Цена за одно событие. Тип события определяется пакетом группы
     */
    public $price;

    /**
     * @var PricedGoal Оплата по целям ТОПа/событиям в мобильном приложении
     */
    public $priced_goal;

    /**
     * @var int Идентификатор ремаркетингового прайс-листа
     * @Assert\Range(
     *     min=-2147483647,
     *     max=2147483647
     * )
     */
    public $pricelist_id;

    /**
     * @var Targetings Структура таргетингов
     * @Assert\Valid()
     */
    public $targetings;

    /**
     * @var int Количество уникальных показов
     * @Assert\Range(
     *     max=2147483647
     * )
     */
    public $uniq_shows_limit;

    /**
     * @var string Периоды для показов
     * [Assert\Choice(['day', 'week', 'month','eternity'])]
     */
    public $uniq_shows_period;

    /**
     * @var string UTM-метки для добавления в URL объявлений.
     */
    public $utm;
}