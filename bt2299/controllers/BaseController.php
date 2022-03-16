<?php
class BaseController {
	public function doRequest() {}

	//Loi goi hien thi view -> nhung html -> Hien thi du lieu View
	public function view($path) {
		include_once('../views/'.$path);
	}
}