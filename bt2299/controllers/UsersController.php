<?php
require_once('BaseController.php');
require_once('../models/Users.php');

/**
 * CRUD:
 * 		m = users -> Ket hop tao controller: UsersController -> Chua dung toi.
 * 		action:
 * 			- view: $this->show()
 * 			- post: $this->post()
 * 			- edit: $this->edit()
 * 			- delete: $this->delete()
 * 			- confirm-delete: $this->confirmDelete()
 * 			- ~~~: $this->index()
 */
class UsersController extends BaseController {
	public function edit() {
		$id = getGet('id');
		$user = Users::find($id);

		$this->view('users/edit.php', [
			'user' => $user
		]);
	}

	public function confirmDelete() {
		$id = getPost('id');
		$u = new Users();
		$u->id = $id;
		$u->delete();

		$this->redirect('m=users');
	}

	public function delete() {
		$id = getGet('id');
		$user = Users::find($id);

		$this->view('users/delete.php', [
			'user' => $user
		]);
	}

	public function index() {
		$userList = Users::list();
		$index = 0;

		$this->view('users/index.php', [
			'userList' => $userList,
			'index'    => $index
		]);
	}

	public function show() {
		$this->view('users/add.php');
	}

	public function post() {
		$u = new Users();
		$u->processForm();
		$u->save();

		$this->redirect('m=users');
	}
}