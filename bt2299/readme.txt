Các bước phát triển dự án:
B1) Xay dung CSDL
create database BT2299

create table users (
	id int primary key auto_increment,
	fullname varchar(50) not null,
	email varchar(150),
	birthday date,
	address varchar(200)
)

create table notes (
	id int primary key auto_increment,
	user_id int references users (id),
	title varchar(250),
	content text,
	created_at datetime,
	updated_at datetime
)

B2) Xay dung cau truc du an
bt2299
	utils
		utility.php
	models
		Config.php
		DBContext.php
		Users.php
		Notes.php
	controller
		BaseController.php
		UsersController.php -> Ke thua tu BaseController
		NotesController.php -> Ke thua tu BaseController
	view
		users
			- list.php
			- add.php
			- edit.php
			- delete.php
		notes
			- list.php
			- add.php
			- edit.php
			- delete.php
	public
		images
		js
		css
		index.php -> don nhan moi yeu cau gui tu client toi server