<?php

/**
 * This is the model class for table "{{product}}".
 *
 * The followings are the available columns in table '{{product}}':
 * @property integer $id
 * @property integer $approved_by
 * @property integer $commission_pc
 * @property integer $category_id
 * @property integer $seller_id
 * @property integer $current_price
 * @property integer $previous_price
 * @property integer $approved
 * @property string $sku
 * @property integer $quantity
 * @property string $description
 * @property string $short_description
 * @property integer $visibility
 * @property string $title
 * @property integer $featured
 * @property integer $shipping_cost
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
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
		return '{{product}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('seller_id, current_price, title, shipping_cost', 'required'),
			array('approved_by, commission_pc, category_id, seller_id, current_price, previous_price, approved, quantity, visibility, featured, shipping_cost, created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('sku, description, short_description, created_date, modified_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, approved_by, commission_pc, category_id, seller_id, current_price, previous_price, approved, sku, quantity, description, short_description, visibility, title, featured, shipping_cost, created_date, created_by, modified_date, modified_by', 'safe', 'on'=>'search'),
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
			'approved_by' => 'Approved By',
			'commission_pc' => 'Commission Pc',
			'category_id' => 'Category',
			'seller_id' => 'Seller',
			'current_price' => 'Current Price',
			'previous_price' => 'Previous Price',
			'approved' => 'Approved',
			'sku' => 'Sku',
			'quantity' => 'Quantity',
			'description' => 'Description',
			'short_description' => 'Short Description',
			'visibility' => 'Visibility',
			'title' => 'Title',
			'featured' => 'Featured',
			'shipping_cost' => 'Shipping Cost',
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
		$criteria->compare('approved_by',$this->approved_by);
		$criteria->compare('commission_pc',$this->commission_pc);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('seller_id',$this->seller_id);
		$criteria->compare('current_price',$this->current_price);
		$criteria->compare('previous_price',$this->previous_price);
		$criteria->compare('approved',$this->approved);
		$criteria->compare('sku',$this->sku,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('visibility',$this->visibility);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('featured',$this->featured);
		$criteria->compare('shipping_cost',$this->shipping_cost);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('modified_date',$this->modified_date,true);
		$criteria->compare('modified_by',$this->modified_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}