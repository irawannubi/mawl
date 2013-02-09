<?php

/**
 * This is the model class for table "{{sub_product}}".
 *
 * The followings are the available columns in table '{{sub_product}}':
 * @property integer $id
 * @property integer $parent_product_id
 * @property string $tItle
 * @property integer $quantity
 * @property integer $price
 * @property integer $shipping_cost
 * @property string $description
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 * @property string $sku
 * @property integer $visibility
 */
class SubProduct extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SubProduct the static model class
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
		return '{{sub_product}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent_product_id, tItle', 'required'),
			array('parent_product_id, quantity, price, shipping_cost, created_by, modified_by, visibility', 'numerical', 'integerOnly'=>true),
			array('description, created_date, modified_date, sku', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, parent_product_id, tItle, quantity, price, shipping_cost, description, created_date, created_by, modified_date, modified_by, sku, visibility', 'safe', 'on'=>'search'),
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
			'parent_product_id' => 'Parent Product',
			'tItle' => 'T Itle',
			'quantity' => 'Quantity',
			'price' => 'Price',
			'shipping_cost' => 'Shipping Cost',
			'description' => 'Description',
			'created_date' => 'Created Date',
			'created_by' => 'Created By',
			'modified_date' => 'Modified Date',
			'modified_by' => 'Modified By',
			'sku' => 'Sku',
			'visibility' => 'Visibility',
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
		$criteria->compare('parent_product_id',$this->parent_product_id);
		$criteria->compare('tItle',$this->tItle,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('price',$this->price);
		$criteria->compare('shipping_cost',$this->shipping_cost);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('modified_date',$this->modified_date,true);
		$criteria->compare('modified_by',$this->modified_by);
		$criteria->compare('sku',$this->sku,true);
		$criteria->compare('visibility',$this->visibility);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}