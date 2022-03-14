<?php
require_once('utility.php');
require_once('dbhelper.php');

class Product {
	//Khai bao cac thuoc tinh
	public $id;
	public $title;
	public $thumbnail;
	public $price;
	public $content;
	public $createdAt;
	public $updatedAt;

	public function processForm() {
		//Doc du lieu tu $_POST -> cai dat len thuoc tinh
		$this->title = getPost('title');
		$this->thumbnail = getPost('thumbnail');
		$this->price = getPost('price');
		$this->content = getPost('content');
		$this->createdAt = date('Y-m-d H:i:s');
		$this->updatedAt = date('Y-m-d H:i:s');
	}

	public function insert() {
		$sql = "insert into products(title, price, thumbnail, content, created_at, updated_at) values ('".$this->title."', '".$this->price."', '".$this->thumbnail."', '".$this->content."', '$".$this->createdAt."', '".$this->updatedAt."')";
		execute($sql);
	}

	public function dumpData() {
		//Hien thi noi dung du lieu ra
		echo '<br/>Test chuc nang trong Class Object';

		echo '<br/>'.$this->id.'-'.$this->title.'-'.$this->content;
	}
}