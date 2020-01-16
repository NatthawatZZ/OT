<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	 private $_id;
	public function authenticate()
	{
		$user = TableMember::model()->findByAttributes(array('psn_id'=>$this->username));
		if($user === null){
			//$this->errorCode = self::ERROR_USERNAME_INVALLD;
		}else if($user->mb_password != $this->password){
			//$this->errorCode=self::ERROR_PASSWORD_INVALLD;
		}else{
			$this->errorCode=self::ERROR_NONE;
			$this->_id = $user->mb_id;
		}
		return !$this->errorCode;

	}

	// public function authenticate()
	// 	{
	// 		$user = TableMember::model()->findByAttributes(array('mb_email'=>$this->username));
	// 		$userpass = TablePersonnel::model()->findByPk(array('psn_per_id'=>$this->password));
	// 		if($user === null){
	// 			$this->errorCode = self::ERROR_USERNAME_INVALLD;
	// 		}else if($userpass->psn_per_id != $this->password){
	// 			$this->errorCode=self::ERROR_PASSWORD_INVALLD;
	// 		}else{
	// 			$this->errorCode=self::ERROR_NONE;
	// 		//	$this->_id = $user->id;
	// 		}
	// 		return !$this->errorCode;
	//
	// 	}

	public function getId(){
		return $this->_id;
	}
}
