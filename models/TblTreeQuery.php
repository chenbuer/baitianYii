<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblTree]].
 *
 * @see TblTree
 */
class TblTreeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return TblTree[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TblTree|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}