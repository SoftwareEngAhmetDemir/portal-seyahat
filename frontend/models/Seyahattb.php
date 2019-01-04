<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "seyahattb".
 *
 * @property int $id
 * @property string $yolculugunadi
 * @property string $iletisim
 * @property string $gizecekyerler
 * @property string $para
 * @property string $sure
 *
 * @property Tbimg[] $tbimgs
 */
class Seyahattb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seyahattb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['yolculugunadi', 'iletisim', 'gizecekyerler', 'para', 'sure'], 'required'],
            [['iletisim'], 'integer'],
            [['yolculugunadi', 'para'], 'string', 'max' => 50],
            [['gizecekyerler'], 'string', 'max' => 100],
            [['sure'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'yolculugunadi' => 'Yolculugunadi',
            'iletisim' => 'Iletisim',
            'gizecekyerler' => 'Gizecekyerler',
            'para' => 'Para',
            'sure' => 'Sure',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbimgs()
    {
        return $this->hasMany(Tbimg::className(), ['id' => 'id']);
    }
}
