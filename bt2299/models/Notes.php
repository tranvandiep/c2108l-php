<?php
require_once('dbcontext.php');

class Notes {
	public $id;
	public $userId;
	public $title;
	public $content;
	public $createdAt;
	public $updatedAt;

	public function processForm() {
		$this->id = getPost('id');
		$this->userId = getPost('userId');
		$this->title = getPost('title');
		$this->content = getPost('content');
	}

	//$u = new Users()
	//$u->insert()
	public function insert() {
		$this->createdAt = date('Y-m-d H:i:s');
		$this->updatedAt = date('Y-m-d H:i:s');

		$sql = "insert into notes(user_id, title, content, created_at, updated_at) values ('".$this->userId."', '".$this->title."', '".$this->content."', '".$this->createdAt."', '".$this->updatedAt."')";
		execute($sql);
	}

	public function update() {
		$sql = "update notes set user_id = '".$this->userId."', title = '".$this->title."', content='".$this->content."', updated_at = '".$this->updatedAt."' where id = ".$this->id;
		execute($sql);
	}

	public function delete() {
		$sql = "delete from notes where id = ".$this->id;
		execute($sql);
	}

	public static function find($id) {
		$sql = "select * from notes where id = $id";
		$item = executeResult($sql, true);

		$u = new Notes();
		$u->id = $item['id'];
		$u->userId = $item['user_id'];
		$u->title = $item['title'];
		$u->content = $item['content'];
		$u->createdAt = $item['created_at'];
		$u->updatedAt = $item['updated_at'];

		return $u;
	}

	//Notes::list() -> tra ve mang doi tuong Notes
	public static function list() {
		// Lay du lieu tu database -> mang doi tuong Notes
		$sql = "select * from notes";
		$dataList = executeResult($sql);

		$noteList = [];
		foreach($dataList as $item) {
			$u = new Notes();
			$u->id = $item['id'];
			$u->userId = $item['user_id'];
			$u->title = $item['title'];
			$u->content = $item['content'];
			$u->createdAt = $item['created_at'];
			$u->updatedAt = $item['updated_at'];

			$noteList[] = $u;
		}

		return $noteList;
	}
}