use master
create database QLDuLich

go
use QLDuLich

create table PhanQuyen(
	id int primary key,
	loaiQuyen nvarchar(20)
)
create table NguoiDung(
	id int identity(0,1) primary key,
	taiKhoan varchar(10),
	matKhau varchar(10),
	idPhanQuyen int,
	ten nvarchar(30),
	ngaySinh Date,
	sdt varchar(10),
	diaChi nvarchar(100),
	email varchar(30)

	foreign key (idPhanQuyen) references PhanQuyen(id)
)

create table GioiThieu(
	idDecription int identity(0,1) primary key,
	idTour int,
	gioiThieu varchar(500),
	timeline nvarchar(100),
	hinh varchar(100)
)

create table LoaiTour(
	idLoaiTour int primary key,
	tenLoaiTour nvarchar(100)
)

create table Tour(
	idTour int identity(0,1) primary key,
	tenTour nvarchar(100),
	lichTrinh nvarchar(100),
	khoiHanh nvarchar(100),
	soNgay int,
	soDem int,
	phuongTien nvarchar(100),
	khachSan nvarchar(100),
	idLoaiTour int ,
	soLuong int,
	giaTien int,

	foreign key (idLoaiTour) references LoaiTour(idLoaiTour),
)

create table DonDatTour(
	idDon int identity(0,1) primary key,
	ngayDat date,
	trangthai int,
	idKhachHang int,
	ten nvarchar(100),
	diaChi nvarchar(100),
	sdt varchar(10),
	email varchar(100)

	foreign key (idKhachHang) references NguoiDung(id)
)

create table ChiTietDon(
	idChiTiet int identity(0,1) primary key,
	idDon int,
	soNguoiLon int,
	soTreEm int,
	tongTien int
	
	foreign key (idDon) references DonDatTour(idDon)
)

insert into PhanQuyen values(0,'admin')
insert into PhanQuyen values(1,'user')

insert into LoaiTour values(0,N'Trong nước'),(1,N'Ngoài nước')
insert into NguoiDung values
('adminDat','12345','0','Phùng Tiến Đạt','','','',''),
('adminViet','12345','0','Võ Minh Quốc Việt','','','',''),
('adminNhu','12345','1','Lý Mỹ Như','2000-1-15','0909090909','TPHCM','nhu@gmail.com'),
('adminChi','12345','1','Trịnh Kim Chi','2000-1-1','0909090909','TPHCM','chi@gmail.com'),
('adminHung','12345','1','Trần Thanh Hùng','2000-1-15','0909090909','TPHCM','hung@gmail.com')

insert into Tour values
(N'Phú Quốc',N'TpHCM - Phú Quốc - TpHCM',N'TP. Hồ Chí Minh',3,3,N'Xe ô tô',0,3688000,'3 sao'),
(N'Đà Lạt',N'TpHCM - Đà Lạt - TpHCM',N'TP. Hồ Chí Minh, Đà Nẵng',3,3,N'Xe ô tô',0,1799000,'3 sao'),
(N'Tây Ninh Củ Chi',N'TpHCM - Tây Ninh - TpHCM',N'TP. Hồ Chí Minh',1,0,N'Xe ô tô',0,790000,'2 sao'),
(N'Đà Nẵng',N'Đà Nẵng - Bà Nà - Hội An - Huế - Phong Nha',N'TP. Hồ Chí Minh',4,3,N'Xe ô tô, Máy bay',0,5990000,'4 sao'),
(N'Nha Trang',N'TpHCM - Nha Trang - Vinpearl Land - TpHCM',N'TP. Hồ Chí Minh',3,3,N'Xe ô tô',0,1790000,'3 sao'),
(N'Hà Nội',N'Hà Nội - Tràng An - Bái Đính - Hạ Long- Yên Tử - Hà Nội',N'TP. Hồ Chí Minh',2,1,N'Xe ô tô, Máy bay',0,2690000,'3 sao'),
(N'Thái Lan',N'',N'TP. Hồ Chí Minh',5,4,N'Máy bay',1,7899000,'3 sao'),
(N'Singapore',N'',N'TP. Hồ Chí Minh',4,3,N'Máy bay',1,9499000,'3 sao'),
(N'Malaysia-Singapore',N'',N'TP. Hồ Chí Minh',6,5,N'Máy bay',1,13990000,'4 sao'),
(N'Campuchia',N'Siem Reap - Phnom Penh',N'TP. Hồ Chí Minh',4,3,N'Xe du lịch',1,4379000,'4 sao'),
(N'Úc',N'Sydney - Sydney Zoo- Blue Mountian',N'TP. Hồ Chí Minh',5,4,N'Máy bay',1,36990000,'4 sao'),
(N'Maldives',N'',N'TP. Hồ Chí Minh',5,4,N'Máy bay',1,45990000,'4 sao')