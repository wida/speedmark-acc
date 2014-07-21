<?php

/**
 * This is the model class for table "cash".
 *
 * The followings are the available columns in table 'cash':
 * @property string $cash_id
 * @property string $cash_date
 * @property string $cash_paid_to
 * @property string $cash_amount
 * @property string $cash_voucher_no
 * @property string $cash_cheque_no
 * @property string $cash_input_date
 * @property string $cash_desc
 * @property string $cash_posted
 * @property string $cash_type
 * @property string $cash_header
 * @property string $id_bank
 * @property string $paid_via
 * @property integer $or_type
 *
 * The followings are the available model relations:
 * @property CashDetail[] $cashDetails
 */
class Cash extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cash';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cash_id', 'required'),
			array('or_type', 'numerical', 'integerOnly'=>true),
			array('cash_id, cash_paid_to', 'length', 'max'=>50),
			array('cash_amount', 'length', 'max'=>19),
			array('cash_voucher_no, cash_cheque_no', 'length', 'max'=>20),
			array('cash_desc', 'length', 'max'=>100),
			array('cash_posted', 'length', 'max'=>1),
			array('cash_type, cash_header', 'length', 'max'=>3),
			array('id_bank', 'length', 'max'=>7),
			array('paid_via', 'length', 'max'=>10),
			array('cash_date, cash_input_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cash_id, cash_date, cash_paid_to, cash_amount, cash_voucher_no, cash_cheque_no, cash_input_date, cash_desc, cash_posted, cash_type, cash_header, id_bank, paid_via, or_type', 'safe', 'on'=>'search'),
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
			'cashDetails' => array(self::HAS_MANY, 'CashDetail', 'id_cash'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cash_id' => 'Cash',
			'cash_date' => 'Cash Date',
			'cash_paid_to' => 'Cash Paid To',
			'cash_amount' => 'Cash Amount',
			'cash_voucher_no' => 'Cash Voucher No',
			'cash_cheque_no' => 'Cash Cheque No',
			'cash_input_date' => 'Cash Input Date',
			'cash_desc' => 'Cash Desc',
			'cash_posted' => 'Cash Posted',
			'cash_type' => 'Cash Type',
			'cash_header' => 'Cash Header',
			'id_bank' => 'Id Bank',
			'paid_via' => 'Paid Via',
			'or_type' => 'Or Type',
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

		$criteria->compare('lower(cash_id)', strtolower($this->cash_id),true);
		$criteria->compare('cash_date',$this->cash_date,true);
		$criteria->compare('lower(cash_paid_to)',strtolower($this->cash_paid_to),true);
		$criteria->compare('cash_amount',$this->cash_amount,true);
		$criteria->compare('lower(cash_voucher_no)',strtolower($this->cash_voucher_no),true);
		$criteria->compare('lower(cash_cheque_no)',strtolower($this->cash_cheque_no),true);
		$criteria->compare('cash_input_date',$this->cash_input_date,true);
		$criteria->compare('lower(cash_desc)',strtolower($this->cash_desc),true);
		$criteria->compare('cash_posted',$this->cash_posted,true);
		$criteria->compare('cash_type',$this->cash_type,true);
		$criteria->compare('cash_header',$this->cash_header,true);
		$criteria->compare('id_bank',$this->id_bank,true);
		$criteria->compare('lower(paid_via)',strtolower($this->paid_via),true);
		$criteria->compare('or_type',$this->or_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cash the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
