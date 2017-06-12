<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Corporations;

/**
 * CorporationSearch represents the model behind the search form about `app\models\Corporations`.
 */
class RecordSearch extends Record
{
    public $user_first_name;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Name', 'Address'], 'safe'],
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
            $query = Corporations::find()->innerJoinWith('corporationAdmin', true);
         
        // add conditions that should always apply here         
         
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=>['attributes'=>['user_first_name', 'id', 'corporation_name', 'corporation_city', 'corporation_state','date_created', 'corporation_status']],
             'pagination' => [
                'pageSize' => 10,
                ],
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
            'corporation_status' => $this->corporation_status,
            'date_created' => $this->date_created,
        ]);

        $query->andFilterWhere(['like', 'corporation_name', $this->corporation_name])
            ->andFilterWhere(['like', 'corporation_desc', $this->corporation_desc]);        
        // filter by person full Admin name
        $query->andWhere('users.user_first_name LIKE "%' . $this->user_first_name . '%" ' . //This will filter when only first name is searched.
        'OR users.user_last_name LIKE "%' . $this->user_first_name . '%" '. //This will filter when only last name is searched.
        'OR CONCAT(users.user_first_name, " ", users.user_last_name) LIKE "%' . $this->user_first_name . '%"' //This will filter when full name is searched.
        );
               

    
        return $dataProvider;
    }
    }
