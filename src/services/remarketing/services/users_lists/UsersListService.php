<?php

namespace VkAdsPhpSdk\services\remarketing\services\users_lists;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\remarketing\services\users_lists\criterias\UsersListSelectionCriteria;
use VkAdsPhpSdk\services\remarketing\services\users_lists\models\RemarketingUsersListGetItem;
use VkAdsPhpSdk\services\remarketing\services\users_lists\models\RemarketingUsersListUpdateItem;

class UsersListService extends BaseService
{
    public function get(UsersListSelectionCriteria $selectionCriteria):array
    {
        return $this->doGet(
            "/api/v3/remarketing/users_lists.json",
            RemarketingUsersListGetItem::class,
            $selectionCriteria
        );
    }

    //todo a.curkan сделать  https://ads.vk.com/doc/api/resource/RemarketingUsersLists POST

    public function update($id, RemarketingUsersListUpdateItem $model):bool
    {
        $this->doPost("/api/v3/remarketing/users_lists/$id.json", $model);
        return true;
    }

    public function delete($id):bool
    {
        return $this->doDelete("/api/v3/remarketing/users_lists/$id.json");
    }
}