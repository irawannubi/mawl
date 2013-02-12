<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */

class UserIdentity extends CUserIdentity
{
    private $_id;
 
	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
    public function authenticate()
    {
        $email=strtolower($this->username);
        $account=Account::model()->find('LOWER(email)=?',array($email));
        if($account===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if(!$account->validatePassword($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$account->id;
            $this->username=$account->first_name;
            $this->setState('role', $account->role);
            $this->errorCode=self::ERROR_NONE;
        }
        return $this->errorCode==self::ERROR_NONE;
    }
 
    public function getId()
    {
        return $this->_id;
    }
}