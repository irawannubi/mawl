<?php

/**
 * This is the model class for table "{{product_list_record}}".
 *
 * The followings are the available columns in table '{{product_list_record}}':
 * @property integer $id
 * @property integer $product_id
 * @property integer $list_id
 * @property string $list_type
 * @property integer $price
 * @property integer $quantity
 * @property string $commission_pc
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 * @property integer $sub_product_id
 */
class ProductListRecord extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProductListRecord the static model class
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
		return '{{product_list_record}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, list_id', 'required'),
			array('product_id, list_id, price, quantity, created_by, modified_by, sub_product_id', 'numerical', 'integerOnly'=>true),
			array('list_type, commission_pc', 'length', 'max'=>45),
			array('created_date, modified_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, product_id, list_id, list_type, price, quantity, commission_pc, created_date, created_by, modified_date, modified_by, sub_product_id', 'safe', 'on'=>'search'),
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
			'product_id' => 'Product',
			'list_id' => 'List',
			'list_type' => 'List Type',
			'price' => 'Price',
			'quantity' => 'Quantity',
			'commission_pc' => 'Commission Pc',
			'created_date' => 'Created Date',
			'created_by' => 'Created By',
			'modified_date' => 'Modified Date',
			'modified_by' => 'Modified By',
			'sub_product_id' => 'Sub Product',
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
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('list_id',$this->list_id);
		$criteria->compare('list_type',$this->list_type,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('commission_pc',$this->commission_pc,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('modified_date',$this->modified_date,true);
		$criteria->compare('modified_by',$this->modified_by);
		$criteria->compare('sub_product_id',$this->sub_product_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}