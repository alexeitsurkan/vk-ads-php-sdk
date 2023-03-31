<?php

namespace app\vk_ads_api\src\services\remarketing\services\users_lists;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\remarketing\services\users_lists\criterias\UsersListSelectionCriteria;
use app\vk_ads_api\src\services\remarketing\services\users_lists\models\RemarketingUsersListGetItem;
use app\vk_ads_api\src\services\remarketing\services\users_lists\models\RemarketingUsersListUpdateItem;

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