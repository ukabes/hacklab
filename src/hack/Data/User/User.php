<?php
namespace Hacklab\Data;

use Hacklab\Data;

class User extends Data{
	
	protected $table = 'users';

	public function createUser($data){
		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
		return $this->create($data);
	}

	public function verifyUserPSWD($password, $hash){
		if (password_verify($password, $hash)) {
		    return true;
		} else {
		    return false;
		}
	}

	

}