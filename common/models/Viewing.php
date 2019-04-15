<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "viewing".
 *
 * @property int $id
 * @property int $client_id
 * @property int $propert_for_rent_id
 * @property string $view_date
 * @property string $comment
 */
class Viewing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'viewing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id', 'propert_for_rent_id'], 'integer'],
            [['view_date'], 'safe'],
            [['comment'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_id' => 'Client ID',
            'propert_for_rent_id' => 'Propert For Rent ID',
            'view_date' => 'View Date',
            'comment' => 'Comment',
        ];
    }
}
