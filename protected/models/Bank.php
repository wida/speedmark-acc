<?php

/**
 * This is the model class for table "bank".
 *
 * The followings are the available columns in table 'bank':
 * @property string $bank_account
 * @property string $bank_name
 * @property string $bank_currency
 */
class Bank extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bank';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bank_account', 'required'),
			array('bank_account', 'length', 'max'=>7),
			array('bank_name', 'length', 'max'=>50),
			array('bank_currency', 'length', 'max'=>3),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('bank_account, bank_name, bank_currency', 'safe', 'on'=>'search'),
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
			'bank_account' => 'Bank Account',
			'bank_name' => 'Bank Name',
			'bank_currency' => 'Bank Currency',
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

		$criteria->compare('bank_account',$this->bank_account,true);
		$criteria->compare('bank_name',$this->bank_name,true);
		$criteria->compare('bank_currency',$this->bank_currency,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bank the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
