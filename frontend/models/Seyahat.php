<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "seyahat".
 *
 * @property int $sid
 * @property string $adsoyad
 * @property string $cinsiyet
 * @property string $gidecektarih
 * @property string $sehir
 */
class Seyahat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seyahat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adsoyad', 'cinsiyet', 'gidecektarih', 'sehir'], 'required'],
            [['cinsiyet'], 'string'],
            [['gidecektarih'], 'safe'],
            [['adsoyad'], 'string', 'max' => 50],
            [['sehir'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sid' => 'Sid',
            'adsoyad' => 'Adsoyad',
            'cinsiyet' => 'Cinsiyet',
            'gidecektarih' => 'Gidecektarih',
            'sehir' => 'Sehir',
        ];
    }
}
