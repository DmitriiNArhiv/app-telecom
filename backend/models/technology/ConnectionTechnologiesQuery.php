<?php

namespace backend\models\technology;

/**
 * This is the ActiveQuery class for [[ConnectionTechnologies]].
 *
 * @see ConnectionTechnologies
 */
class ConnectionTechnologiesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ConnectionTechnologies[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ConnectionTechnologies|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
