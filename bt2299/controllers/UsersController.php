<?php
require_once('BaseController.php');
require_once('../models/Users.php');

class UsersController extends BaseController {
	public function doRequest() {
		$action = getGet('action');

		switch($action) {
			case 'view':
				$this->show();
			break;
			case 'post':
				$this->post();
			break;
			case 'edit':

			break;
			case 'delete':

			break;
			default:
				$this->show();
			break;
			//Viet them cac function cho controller nay.
		}
	}

	public function show() {
		$this->view('users/add.php');
	}

	public function post() {
		// Su post du lieu o day
		// var_dump($_POST);
		// var_dump($_GET);
		$u = new Users();
		$u->processForm();
		$u->insert();

		header('Location: ?m=users&action=view');
	}
}