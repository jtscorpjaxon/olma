<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Olmalar;


class OlmaQidirsh extends Olmalar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['unib', 'uzilish'], 'match', 'pattern' => "/\d{2}\.\d{2}\.\d{4}/"],
            [['rang', 'holati'], 'safe'],
            [['yeyilgani'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Olmalar::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['id'=>SORT_DESC]]
        ]);

        $this->load($params);


        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->andFilterWhere([
            'id' => $this->id,
            'yeyilgani' => $this->yeyilgani,
        ]);



        if($this->unib){
            list($dateObjFrom, $dateObjTo)=$this->getDatesObj($this->unib);
            $query->andWhere(['between','unib', $dateObjFrom->getTimestamp(),$dateObjTo->getTimestamp()]);
        }

        if($this->uzilish){
            list($dateObjFrom, $dateObjTo)=$this->getDatesObj($this->uzilish);
            $query->andWhere(['between','uzilish', $dateObjFrom->getTimestamp(),$dateObjTo->getTimestamp()]);
        }

        $query->andFilterWhere(['like', 'rang', $this->rang])
            ->andFilterWhere(['like', 'holati', $this->holati]);

        return $dataProvider;
    }

    function getDatesObj($date){
        $dateObjFrom=\DateTime::createFromFormat('d.m.Y H:i:s',$date." 00:00:00");
        $dateObjTo=\DateTime::createFromFormat('d.m.Y H:i:s',$date." 23:59:59");
        return [$dateObjFrom,$dateObjTo];
    }
}
