<?php

namespace backend\models\tarif;

/**
 * This is the ActiveQuery class for [[Tarifs]].
 *
 * @see Tarifs
 */
class TarifsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Tarifs[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Tarifs|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
