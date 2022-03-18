<?php
require_once('dbcontext.php');

class Users {
	public $id;
	public $fullname;
	public $email;
	public $birthday;
	public $address;

	public function processForm() {
		$this->id = getPost('id');
		$this->fullname = getPost('fullname');
		$this->email = getPost('email');
		$this->birthday = getPost('birthday');
		$this->address = getPost('address');
	}

	public function save() {
		if($this->id > 0) {
			$this->update();
		} else {
			$this->insert();
		}
	}

	//$u = new Users()
	//$u->insert()
	public function insert() {
		$sql = "insert into users(fullname, email, birthday, address) values ('".$this->fullname."', '".$this->email."', '".$this->birthday."', '".$this->address."')";
		execute($sql);
	}

	public function update() {
		$sql = "update users set fullname = '".$this->fullname."', email = '".$this->email."', birthday='".$this->birthday."', address = '".$this->address."' where id = ".$this->id;
		execute($sql);
	}

	public function delete() {
		$sql = "delete from users where id = ".$this->id;
		execute($sql);
	}

	public static function find($id) {
		$sql = "select * from users where id = $id";
		$item = executeResult($sql, true);

		$u = new Users();
		$u->id = $item['id'];
		$u->fullname = $item['fullname'];
		$u->email = $item['email'];
		$u->birthday = $item['birthday'];
		$u->address = $item['address'];

		return $u;
	}

	//Users::list() -> tra ve mang doi tuong Users
	public static function list() {
		// Lay du lieu tu database -> mang doi tuong Users
		$sql = "select * from users";
		$dataList = executeResult($sql);

		$userList = [];
		foreach($dataList as $item) {
			$u = new Users();
			$u->id = $item['id'];
			$u->fullname = $item['fullname'];
			$u->email = $item['email'];
			$u->birthday = $item['birthday'];
			$u->address = $item['address'];

			$userList[] = $u;
		}

		return $userList;
	}
}