<?php
// Class People -> parent class
class People {
	public $fullname;
	public $birthday;
	public $cmtnd;
	public $address;

	public function echo() {
		echo '<br/>Ho ten: '.$this->fullname.', ngay sinh: '.$this->birthday.', CMTND: '.$this->cmtnd.',  dia chi: '.$this->address;
	}
}