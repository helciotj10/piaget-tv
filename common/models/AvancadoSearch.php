<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Avancado;

/**
 * AvancadoSearch represents the model behind the search form of `common\models\Avancado`.
 */
class AvancadoSearch extends Avancado
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'rubricasVerLancamentosAntigos', 'cartazLimiteDeSlide', 'indexId'], 'integer'],
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
        $query = Avancado::find();

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
            'id' => $this->id,
            'rubricasVerLancamentosAntigos' => $this->rubricasVerLancamentosAntigos,
            'cartazLimiteDeSlide' => $this->cartazLimiteDeSlide,
            'indexId' => $this->indexId,
        ]);

        return $dataProvider;
    }
}
