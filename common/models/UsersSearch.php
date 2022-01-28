<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Users;

/**
 * UsersSearch represents the model behind the search form of `common\models\Users`.
 */
class UsersSearch extends Users
{
    public $globalSearch;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['globalSearch', 'sexo', 'foto', 'data_nascimento', 'documento_indentificacao', 'cinto', 'telemovel', 'facebook', 'username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'verification_token', 'turma', 'tipo'], 'safe'],
            [['aturaMetros', 'pesoKilo'], 'number'],
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
        $query = Users::find();

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

        $query->orFilterWhere(['like', 'documento_indentificacao', $this->globalSearch])
            ->orFilterWhere(['like', 'cinto', $this->globalSearch])
            ->orFilterWhere(['like', 'telemovel', $this->globalSearch])
            ->orFilterWhere(['like', 'facebook', $this->globalSearch])
            ->orFilterWhere(['like', 'username', $this->globalSearch])
            ->orFilterWhere(['like', 'nome', $this->globalSearch])
            ->orFilterWhere(['like', 'email', $this->globalSearch])
            ->orFilterWhere(['like', 'turma', $this->globalSearch])
            ->orFilterWhere(['like', 'sexo', $this->globalSearch])
            ->orFilterWhere(['like', 'tipo', $this->globalSearch]);

        return $dataProvider;
    }
}
