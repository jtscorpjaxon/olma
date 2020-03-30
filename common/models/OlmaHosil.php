<?php

namespace common\models;

use yii\base\Model;


class OlmaHosil extends Model
{

    public $quantity;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quantity'], 'required'],
            [['quantity'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'quantity' => 'Miqdorini kiriting'
        ];
    }
}
