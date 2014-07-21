<?php

/**
 * This is the model class for table "event".
 *
 * The followings are the available columns in table 'event':
 * @property integer $event_id
 * @property integer $band_id
 * @property integer $city_id
 * @property string $event_date
 * @property string $event_desc
 */
class Event extends BandActiveRecord
{
	public $city_name;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Event the static model class
	 */

	public function getDbConnection()
    {
        return self::getTempDbConnection();
    }

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'event';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('band_id, city_id, event_date, event_desc', 'required'),
			array('band_id, city_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('event_id, band_id, city_id, event_date, event_desc', 'safe', 'on'=>'search'),
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
			'event_id' => 'Event',
			'band_id' => 'Band',
			'city_id' => 'City',
			'event_date' => 'Event Date',
			'event_desc' => 'Event Desc',
			'city_name'	=> 'City Name',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('event_id',$this->event_id);
		$criteria->compare('band_id',$this->band_id);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('event_date',$this->event_date,true);
		$criteria->compare('event_desc',$this->event_desc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}