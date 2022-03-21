Nôi dung kiến thức học:
- Ôn tập:
	- cookie -> JS + Xu ly phia backend
	- session 
	- localStorage
	- Keep login
- cài đặt môi trường phát triển laravel (CRUD -> MVC)
	- Cấu hình
	- Tạo dự án đầu tay
	- Thiết lập authen
	- Cài đặt 1 theme admin cho dự án
	- Phương pháp học
===================================================================
Login -> Solution
	- Form Login -> gui yeu cau login len
			-> TH failed -> Ko noi lam j???
			-> TH thanh cong: keep duoc login lau (1 tuan, 1 thang, 1 nam)
				B1) Su dung session -> phien lam viec -> check nhanh
					- Thoi gian song: gioi han
					- Sau khi session bi huy ???
				B2) Giai phap luu cookie <-> tu dong dang nhap <-> Xac dinh dung nguoi dung dang dang nhap
					- token: duy nhat (ko trung vs bat ky ai)
					-> luu vao cookie: token
					-> database -> luu token -> mapping tai khoan nguoi -> Yen tam (security)
					-> Khi session bi huy:
						- doc token: client
						- check token trong database -> mapping vs tai khoan nguoi dung nao -> tu dong login -> luu session