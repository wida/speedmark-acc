<?php

/**
 * This is the model class for table "tipe_or".
 *
 * The followings are the available columns in table 'tipe_or':
 * @property integer $tipe_or_id
 * @property string $tipe_or
 * @property string $tipe_or_desc
 */
class TipeOr extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipe_or';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipe_or_id', 'required'),
			array('tipe_or_id', 'numerical', 'integerOnly'=>true),
			array('tipe_or, tipe_or_desc', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tipe_or_id, tipe_or, tipe_or_desc', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tipe_or_id' => 'Tipe Or',
			'tipe_or' => 'Tipe Or',
			'tipe_or_desc' => 'Tipe Or Desc',
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

		$criteria->compare('tipe_or_id',$this->tipe_or_id);
		$criteria->compare('tipe_or',$this->tipe_or,true);
		$criteria->compare('tipe_or_desc',$this->tipe_or_desc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipeOr the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
