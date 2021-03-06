<?php
namespace app\models;

use yii\db\ActiveQuery;

/**
 * UserQuery
 */
class UserQuery extends ActiveQuery
{
    /**
     * @return $this
     */
    public function active()
    {
        return $this->andWhere(['status' => User::STATUS_ACTIVE]);
    }
}
