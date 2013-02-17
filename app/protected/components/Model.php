<?php
/**
 * Model is the customized base model class.
 * All model classes for this application should extend from this base class.
 */
class Model extends CActiveRecord
{
	/**
	* Runs between the CActiveRecord beforeSave method and the individual model's beforeSave method (if they have one)
	* Saves the timestamp and current user on record creation and updates
	*
	* @returns bool whether the method executred succesfully
	*/
	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
				$this->created_date = $this->modified_date = date('Y-m-d h:i:s', time());
				$this->created_by = $this->modified_by = Yii::app()->user->id;
			}
			else
			{
				$this->modified_date = date('Y-m-d h:i:s', time());
				$this->modified_by = Yii::app()->user->id;
			}
			return true;
		}
		else
		{
			return false;
		}
	}
	
}