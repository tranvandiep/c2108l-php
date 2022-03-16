<?php
require_once('people.php');

// Class Student -> Child Class
class Student extends People {
	// thuoc tinh moi
	public $rollno;

	// Hanh dong moi
	public function learning() {
		echo '<br/>Sinh vien dang hoc tap ...';
	}

	// Ghi de phuong thuc -> thanh con -> viet lai ham cua thang cha
	// public function echo() {
	// 	echo '<br/>Ho ten: '.$this->fullname.', ngay sinh: '.$this->birthday.', CMTND: '.$this->cmtnd.',  dia chi: '.$this->address.', msv: '.$this->rollno;
	// }

	public function echo() {
		parent::echo();
		echo ', msv: '.$this->rollno;
	}
}