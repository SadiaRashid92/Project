<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TestCrud;

/**
 * TestCrudSearch represents the model behind the search form of `app\models\TestCrud`.
 */
class TestCrudSearch extends TestCrud
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'flag_status', 'created_by'], 'integer'],
            [['flag_title', 'flag_desc', 'date_created'], 'safe'],
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
        $query = TestCrud::find();

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
            'date_created' => $this->date_created,
            'flag_status' => $this->flag_status,
            'created_by' => $this->created_by,
        ]);

        $query->andFilterWhere(['like', 'flag_title', $this->flag_title])
            ->andFilterWhere(['like', 'flag_desc', $this->flag_desc]);

        return $dataProvider;
    }
}
