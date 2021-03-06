<?php

/**
 * This is the model class for table "{{problem_recommendation}}".
 *
 * The followings are the available columns in table '{{problem_recommendation}}':
 * @property string $id
 * @property integer $problem_id
 * @property string $recomendation_comment
 */
class ProblemRecommendation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{problem_recommendation}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('problem_id', 'numerical', 'integerOnly'=>true),
			array('recomendation_comment', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, problem_id, recomendation_comment', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
            'problems' => array(self::MANY_MANY, 'Problem', 'data_problem_recommendations(recommendation_id, problem_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'problem_id' => 'Проблема',
			'recomendation_comment' => 'Рекомендация',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('problem_id',$this->problem_id);
		$criteria->compare('recomendation_comment',$this->recomendation_comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProblemRecommendation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
