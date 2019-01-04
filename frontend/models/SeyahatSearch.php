<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Seyahat;

/**
 * SeyahatSearch represents the model behind the search form of `frontend\models\Seyahat`.
 */
class SeyahatSearch extends Seyahat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sid'], 'integer'],
            [['adsoyad', 'cinsiyet', 'gidecektarih', 'sehir'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Seyahat::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'sid' => $this->sid,
            'gidecektarih' => $this->gidecektarih,
        ]);

        $query->andFilterWhere(['like', 'adsoyad', $this->adsoyad])
            ->andFilterWhere(['like', 'cinsiyet', $this->cinsiyet])
            ->andFilterWhere(['like', 'sehir', $this->sehir]);

        return $dataProvider;
    }
}

?>

