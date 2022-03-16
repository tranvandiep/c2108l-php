<?php
require_once('dbcontext.php');

class Users {
	public $id;
	public $fullname;
	public $email;
	public $birthday;
	public $address;

	public function processForm() {
		$this->fullname = getPost('fullname');
		$this->email = getPost('email');
		$this->birthday = getPost('birthday');
		$this->address = getPost('address');
	}

	//$u = new Users()
	//$u->insert()
	public function insert() {
		$sql = "insert into users(fullname, email, birthday, address) values ('".$this->fullname."', '".$this->email."', '".$this->birthday."', '".$this->address."')";
		execute($sql);
	}

	public function update() {

	}

	public function delete() {

	}

	//Users::list() -> tra ve mang doi tuong Users
	public static function list() {
		// Lay du lieu tu database -> mang doi tuong Users

	}
}