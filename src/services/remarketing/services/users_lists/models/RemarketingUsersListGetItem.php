<?php

namespace app\vk_ads_api\src\services\remarketing\services\users_lists\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\RemarketingUsersListHistory;
use app\vk_ads_api\src\models\RemarketingUsersListUser;

class RemarketingUsersListGetItem extends Model
{
    /**
     * @var int
     */
    public $base;

    /**
     * @var bool
     */
    public $can_create_portrait;

    /**
     * @var string
     */
    public $created;

    /**
     * @var int
     */
    public $entries_count;

    /**
     * @var bool
     */
    public $has_history;

    /**
     * @var RemarketingUsersListHistory[]
     */
    public $history;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $ids_count;

    /**
     * @var int
     */
    public $matched_ids_count;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var RemarketingUsersListUser[]
     */
    public $users;

    /**
     * @var int
     */
    public $users_count;
}