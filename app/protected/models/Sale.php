<?php

/**
 * This is the model class for table "{{sale}}".
 *
 * The followings are the available columns in table '{{sale}}':
 * @property integer $id
 * @property integer $transaction_id
 * @property integer $shipping_id
 * @property integer $buyer_id
 * @property string $status
 * @property string $order_number
 * @property integer $products_cost
 * @property integer $shipping_cost
 * @property integer $shipping_address
 * @property integer $bIlling_address
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 */
class Sale extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sale the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sale}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transaction_id, shipping_id, buyer_id', 'required'),
			array('transaction_id, shipping_id, buyer_id, products_cost, shipping_cost, shipping_address, bIlling_address, created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('status, order_number', 'length', 'max'=>45),
			array('created_date, modified_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, transaction_id, shipping_id, buyer_id, status, order_number, products_cost, shipping_cost, shipping_address, bIlling_address, created_date, created_by, modified_date, modified_by', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'transaction_id' => 'Transaction',
			'shipping_id' => 'Shipping',
			'buyer_id' => 'Buyer',
			'status' => 'Status',
			'order_number' => 'Order Number',
			'products_cost' => 'Products Cost',
			'shipping_cost' => 'Shipping Cost',
			'shipping_address' => 'Shipping Address',
			'bIlling_address' => 'B Illing Address',
			'created_date' => 'Created Date',
			'created_by' => 'Created By',
			'modified_date' => 'Modified Date',
			'modified_by' => 'Modified By',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('transaction_id',$this->transaction_id);
		$criteria->compare('shipping_id',$this->shipping_id);
		$criteria->compare('buyer_id',$this->buyer_id);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('order_number',$this->order_number,true);
		$criteria->compare('products_cost',$this->products_cost);
		$criteria->compare('shipping_cost',$this->shipping_cost);
		$criteria->compare('shipping_address',$this->shipping_address);
		$criteria->compare('bIlling_address',$this->bIlling_address);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('modified_date',$this->modified_date,true);
		$criteria->compare('modified_by',$this->modified_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}