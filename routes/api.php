<?php

use App\Http\Controllers\ChiTietDonHangConTroller;
use App\Http\Controllers\ChiTietPhanQuyenController;
use App\Http\Controllers\DaiLyController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\DiaChiController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\GiaoDichConTroller;
use App\Http\Controllers\KhachhangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\NhapKhoController;
use App\Http\Controllers\PhanQuyenController;
use App\Http\Controllers\PhieuKhuyenMaiController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\ThongKeController;
use App\Http\Controllers\TrangChuController;
use App\Models\PhieuKhuyenMai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/giao-dich/index', [GiaoDichConTroller::class, 'index']);
Route::get('/admin/chuc-nang/data', [NhanVienController::class, 'getDataChucNang']);
Route::post('/admin/chi-tiet-phan-quyen/create', [ChiTietPhanQuyenController::class, 'store']);

Route::get('/admin/danh-muc/data', [DanhMucController::class, 'getData']);
//127.0.0.1:8000/api/admin/danh-muc/data
Route::post('/admin/danh-muc/create', [DanhMucController::class, 'store']);
//127.0.0.1:8000/api/admin/danh-muc/create
Route::post('/admin/danh-muc/check-slug', [DanhMucController::class, 'checkSlug']);
Route::post('/admin/danh-muc/check-slug-update', [DanhMucController::class, 'checkSlugUpdate']);
//delete
Route::delete('/admin/danh-muc/delete/{id}', [DanhMucController::class, 'destroy']);
//http://127.0.0.1:8000/api/admin/danh-muc/delete/{id}
Route::put('/admin/danh-muc/update', [DanhMucController::class, 'update']);
Route::put('/admin/danh-muc/change-status', [DanhMucController::class, 'changeStatus']);

Route::get('/admin/dai-ly/data', [DaiLyController::class, 'getData']);
Route::post('/admin/dai-ly/create', [DaiLyController::class, 'store']);
Route::delete('/admin/dai-ly/delete/{id}', [DaiLyController::class, 'destroy']);
Route::put('/admin/dai-ly/update', [DaiLyController::class, 'update']);
Route::put('/admin/dai-ly/change-status', [DaiLyController::class, 'changeStatus']);

Route::get('/admin/phieu-khuyen-mai/data', [PhieuKhuyenMaiController::class, 'getData']);
Route::post('/admin/phieu-khuyen-mai/create', [PhieuKhuyenMaiController::class, 'store']);
Route::delete('/admin/phieu-khuyen-mai/delete/{id}', [PhieuKhuyenMaiController::class, 'destroy']);
Route::put('/admin/phieu-khuyen-mai/update', [PhieuKhuyenMaiController::class, 'update']);
Route::put('/admin/phieu-khuyen-mai/change-status', [PhieuKhuyenMaiController::class, 'changeStatus']);

Route::post('/dai-ly/tao-tai-khoan', [DaiLyController::class, 'store']);
Route::post('/dai-ly/dang-nhap', [DaiLyController::class, 'dangNhap']);
Route::post('/dai-ly/kiem-tra-chia-khoa', [DaiLyController::class, 'kiemTraChiaKhoa']);

Route::post('/dai-ly/quen-mat-khau', [DaiLyController::class, 'actionQuenMatKhau']);
Route::post('/dai-ly/lay-lai-mat-khau/{hash_reset}', [DaiLyController::class, 'actionLaylaiMK']);
Route::get('/dai-ly/kich-hoat-tai-khoan/{hash_active}', [DaiLyController::class, 'actionKichHoatTK']);


Route::post('/admin/nhan-vien/create', [NhanVienController::class, 'store']);
Route::get('/admin/nhan-vien/data', [NhanVienController::class, 'getData']);
Route::put('/admin/nhan-vien/update', [NhanVienController::class, 'update']);
Route::delete('/admin/nhan-vien/delete/{id}', [NhanVienController::class, 'destroy']);
Route::put('/admin/nhan-vien/change-status', [NhanVienController::class, 'changeStatus']);

Route::get('/admin/khach-hang/data', [KhachhangController::class, 'dataKhachHang']);


Route::post('/admin/dang-nhap', [NhanVienController::class, 'dangNhap']);
Route::post('/admin/kiem-tra-chia-khoa', [NhanVienController::class, 'kiemTraChiaKhoa']);

Route::post('/dai-ly/san-pham/create', [SanPhamController::class, 'store']);
Route::get('/dai-ly/san-pham/data', [SanPhamController::class, 'getData']);
Route::put('/dai-ly/san-pham/update', [SanPhamController::class, 'update']);
Route::delete('/dai-ly/san-pham/delete/{id}', [SanPhamController::class, 'delete']);
Route::put('/dai-ly/san-pham/change-status', [SanPhamController::class, 'changeStatus']);

Route::post('/dai-ly/nhap-kho/them-san-pham-nhap-kho', [NhapKhoController::class, 'themSanPhamNhapKho']);
Route::get('/dai-ly/nhap-kho/data-san-pham-nhap-kho', [NhapKhoController::class, 'dataSanPhamNhapKho']);
Route::post('/dai-ly/nhap-kho/cap-nhat-san-pham-nhap-kho', [NhapKhoController::class, 'capNhatSanPhamNhapKho']);
Route::post('/dai-ly/nhap-kho/xoa-san-pham-nhap-kho', [NhapKhoController::class, 'xoaSanPhamNhapKho']);
Route::post('/dai-ly/nhap-kho/xac-nhan-nhap-kho', [NhapKhoController::class, 'xacNhanNhapKho']);
Route::get('/dai-ly/nhap-kho/danh-sach-nhap-kho', [NhapKhoController::class, 'danhSachNhapKho']);
Route::get('/dai-ly/nhap-kho/thong-ke-kho', [NhapKhoController::class, 'thongKeKho']);
Route::get('/dai-ly/thong-ke/data-thong-ke-1', [ThongKeController::class, 'dataThongKe1']);
Route::get('/dai-ly/thong-ke/data-thong-ke-2', [ThongKeConTroller::class, 'dataThongKe2']);

Route::get('/dai-ly/data-don-hang', [DonHangController::class, 'dataDonHangDaiLy']);
Route::post('/dai-ly/xac-nhan-giao-kho', [DonHangController::class, 'xacNhanGiaoKho']);


Route::post('/chi-tiet-san-pham', [SanPhamController::class, 'chiTietSanPham']);
Route::post('/danh-sach-san-pham', [SanPhamController::class, 'dataDanhSachSanPhamTheoDanhMuc']);
Route::get('/danh-muc/data', [DanhMucController::class, 'dataDanhMucClient']);


// Chi tiêt sản phâm
Route::get('/san-pham/{id}', [SanPhamController::class, 'sanPhamChiTiet']);

Route::get('/admin/phan-quyen/data', [PhanQuyenController::class, 'getData']);
Route::post('/admin/phan-quyen/create', [PhanQuyenController::class, 'createData']);
Route::put('/admin/phan-quyen/update', [PhanQuyenController::class, 'UpateData']);
Route::delete('/admin/phan-quyen/delete/{id}', [PhanQuyenController::class, 'deleteData']);


Route::get('/trang-chu/data', [TrangChuController::class, 'dataTrangChu']);
Route::post('/trang-chu/tim-kiem', [SanPhamController::class, 'timKiemTrangChu']);
Route::get('/trang-chu/danh-sach-san-pham/{id}', [TrangChuController::class, 'dataDanhSachSanPham']);
Route::get('/kich-hoat-tai-khoan/{id}', [TrangChuController::class, 'kichHoatTaiKhoan']);

Route::post('/khach-hang/create', [KhachhangController::class, 'store']);
Route::post('/khach-hang/login', [KhachhangController::class, 'actionLogin']);
Route::post('/khach-hang/quen-mat-khau', [KhachhangController::class, 'actionQuenmatKhau']);
Route::post('/khach-hang/lay-lai-mat-khau/{hash_reset}', [KhachhangController::class, 'actionLayLaiMatKhau']);

Route::get('/khach-hang/thong-tin', [KhachhangController::class, 'thongTin']);
Route::post('/khach-hang/update-thong-tin', [KhachhangController::class, 'updateThongTin']);
Route::post('/khach-hang/update-mat-khau', [KhachhangController::class, 'updateMatKhau']);

Route::get('/khach-hang/dia-chi/data', [DiaChiController::class, 'data']);
Route::post('/khach-hang/dia-chi/create', [DiaChiController::class, 'store']);
Route::post('/khach-hang/dia-chi/update', [DiaChiController::class, 'update']);
Route::post('/khach-hang/dia-chi/delete', [DiaChiController::class, 'destroy']);


Route::post('/admin/khach-hang/kich-hoat-tai-khoan', [KhachhangController::class, 'kichHoatTaiKhoan']);
Route::post('/admin/khach-hang/doi-trang-thai', [KhachhangController::class, 'doiTrangThaiKhachHang']);
Route::post('/admin/khach-hang/update', [KhachhangController::class, 'updateTaiKhoan']);
Route::post('/admin/khach-hang/delete', [KhachhangController::class, 'deleteTaiKhoan']);
Route::post('/admin/khach-hang/doi-mat-khau', [KhachhangController::class, 'doiMatKhauTaiKhoan']);

Route::get('/admin/don-hang/data', [DonHangController::class, 'adminDataDonHang']);
Route::post('/admin/don-hang/chi-tiet-don-hang', [DonHangController::class, 'adminDataChiTietDonHang']);
Route::post('/admin/don-hang/doi-trang-thai-thanh-toan', [DonHangController::class, 'adminChangeThanhToan']);
Route::post('/admin/don-hang/doi-tinh-trang-don-hang', [DonHangController::class, 'adminChangeDonHang']);


Route::post('/khach-hang/them-vao-gio-hang', [ChiTietDonHangConTroller::class, 'themVaoGioHang']);
Route::get('/khach-hang/data-gio-hang', [ChiTietDonHangConTroller::class, 'dataGioHang']);
Route::post('/khach-hang/xoa-gio-hang', [ChiTietDonHangConTroller::class, 'xoaGioHang']);
Route::post('/khach-hang/update-gio-hang', [ChiTietDonHangConTroller::class, 'updateGioHang']);

Route::post('/khach-hang/check-login', [KhachhangController::class, 'checkLogin']);

Route::post('/khach-hang/mua-hang', [DonHangController::class, 'actionMuaHang']);

Route::get('/khach-hang/data-don-hang', [DonHangController::class, 'dataDonHang']);

Route::get('/khach-hang/dang-xuat', [KhachhangController::class, 'dangXuat']);
Route::get('/khach-hang/dang-xuat-all', [KhachhangController::class, 'dangXuatAll']);





