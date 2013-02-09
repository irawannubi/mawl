<?php

/**
 * This is the model class for table "{{account}}".
 *
 * The followings are the available columns in table '{{account}}':
 * @property integer $id
 * @property string $role
 * @property string $first_name
 * @property string $last_name
 * @property string $password
 * @property string $salt
 * @property string $last_login
 * @property string $email
 * @property string $merchant_brand_name
 * @property string $merchant_bank_number
 * @property string $merchant_bank_sort_code
 * @property string $merchant_phone
 * @property string $merchant_bio
 * @property string $merchant_photo_url
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 */
class Account extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Account the static model class
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
		return '{{account}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('role, salt', 'length', 'max'=>45),
			array('first_name, last_name, password', 'length', 'max'=>200),
			array('email, merchant_brand_name', 'length', 'max'=>1000),
			array('merchant_bank_number, merchant_bank_sort_code, merchant_phone', 'length', 'max'=>100),
			array('last_login, merchant_bio, merchant_photo_url, created_date, modified_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, role, first_name, last_name, password, salt, last_login, email, merchant_brand_name, merchant_bank_number, merchant_bank_sort_code, merchant_phone, merchant_bio, merchant_photo_url, created_date, created_by, modified_date, modified_by', 'safe', 'on'=>'search'),
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
			'role' => 'Role',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'password' => 'Password',
			'salt' => 'Salt',
			'last_login' => 'Last Login',
			'email' => 'Email',
			'merchant_brand_name' => 'Merchant Brand Name',
			'merchant_bank_number' => 'Merchant Bank Number',
			'merchant_bank_sort_code' => 'Merchant Bank Sort Code',
			'merchant_phone' => 'Merchant Phone',
			'merchant_bio' => 'Merchant Bio',
			'merchant_photo_url' => 'Merchant Photo Url',
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
		$criteria->compare('role',$this->role,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('salt',$this->salt,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('merchant_brand_name',$this->merchant_brand_name,true);
		$criteria->compare('merchant_bank_number',$this->merchant_bank_number,true);
		$criteria->compare('merchant_bank_sort_code',$this->merchant_bank_sort_code,true);
		$criteria->compare('merchant_phone',$this->merchant_phone,true);
		$criteria->compare('merchant_bio',$this->merchant_bio,true);
		$criteria->compare('merchant_photo_url',$this->merchant_photo_url,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('modified_date',$this->modified_date,true);
		$criteria->compare('modified_by',$this->modified_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}