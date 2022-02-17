<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Front-end
Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index');
Route::get('/nuoc-hoa', 'App\Http\Controllers\NuocHoaController@index');
Route::post('/tim-kiem', 'App\Http\Controllers\NuocHoaController@search');

//LienHe
Route::get('/lien-he', 'App\Http\Controllers\LienHeController@lien_he');
Route::get('/information', 'App\Http\Controllers\LienHeController@information');
Route::post('/save-info', 'App\Http\Controllers\LienHeController@save_info');
Route::post('/update-info/{ttMa}', 'App\Http\Controllers\LienHeController@update_info');



//Loai San Pham Trang Chu
Route::get('/loai-san-pham/{loaiMa}', 'App\Http\Controllers\LoaiSanPhamController@show_loaisanpham_home');
Route::get('/thuong-hieu/{thMa}', 'App\Http\Controllers\ThuongHieuController@show_thuonghieu_home');
Route::get('/mua/{muaMa}', 'App\Http\Controllers\MuaSanPhamController@show_mua_home');
Route::get('/giasanpham-1', 'App\Http\Controllers\SanPhamController@show_gia1_home');
Route::get('/giasanpham-2', 'App\Http\Controllers\SanPhamController@show_gia2_home');
Route::get('/giasanpham-3', 'App\Http\Controllers\SanPhamController@show_gia3_home');
Route::get('/giasanpham-4', 'App\Http\Controllers\SanPhamController@show_gia4_home');
Route::get('/giasanpham-5', 'App\Http\Controllers\SanPhamController@show_gia5_home');
Route::get('/chi-tiet-san-pham/{spMa}', 'App\Http\Controllers\SanPhamController@details_product');

//Back-end
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard', 'App\Http\Controllers\AdminController@show_dashboard');
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');
Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard');

//LoaiSanPham
Route::get('/all-loaisanpham', 'App\Http\Controllers\LoaiSanPhamController@all_loaisanpham');
Route::get('/add-loaisanpham', 'App\Http\Controllers\LoaiSanPhamController@add_loaisanpham');
Route::get('/edit-loaisanpham/{loaiMa}', 'App\Http\Controllers\LoaiSanPhamController@edit_loaisanpham');
Route::get('/delete-loaisanpham/{loaiMa}', 'App\Http\Controllers\LoaiSanPhamController@delete_loaisanpham');
Route::get('/unactive-loaisanpham/{loaiMa}', 'App\Http\Controllers\LoaiSanPhamController@unactive_loaisanpham');
Route::get('/active-loaisanpham/{loaiMa}', 'App\Http\Controllers\LoaiSanPhamController@active_loaisanpham');
Route::post('/save-loaisanpham', 'App\Http\Controllers\LoaiSanPhamController@save_loaisanpham');
Route::post('/update-loaisanpham/{loaiMa}', 'App\Http\Controllers\LoaiSanPhamController@update_loaisanpham');

//ThuongHieu
Route::get('/all-thuonghieu', 'App\Http\Controllers\ThuongHieuController@all_thuonghieu');
Route::get('/add-thuonghieu', 'App\Http\Controllers\ThuongHieuController@add_thuonghieu');
Route::get('/edit-thuonghieu/{thMa}', 'App\Http\Controllers\ThuongHieuController@edit_thuonghieu');
Route::get('/delete-thuonghieu/{thMa}', 'App\Http\Controllers\ThuongHieuController@delete_thuonghieu');
Route::get('/unactive-thuonghieu/{thMa}', 'App\Http\Controllers\ThuongHieuController@unactive_thuonghieu');
Route::get('/active-thuonghieu/{thMa}', 'App\Http\Controllers\ThuongHieuController@active_thuonghieu');
Route::post('/save-thuonghieu', 'App\Http\Controllers\ThuongHieuController@save_thuonghieu');
Route::post('/update-thuonghieu/{thMa}', 'App\Http\Controllers\ThuongHieuController@update_thuonghieu');

//MuaSanPham
Route::get('/all-muasanpham', 'App\Http\Controllers\MuaSanPhamController@all_muasanpham');
Route::get('/add-muasanpham', 'App\Http\Controllers\MuaSanPhamController@add_muasanpham');
Route::get('/edit-muasanpham/{muaMa}', 'App\Http\Controllers\MuaSanPhamController@edit_muasanpham');
Route::get('/delete-muasanpham/{muaMa}', 'App\Http\Controllers\MuaSanPhamController@delete_muasanpham');
Route::get('/unactive-muasanpham/{muaMa}', 'App\Http\Controllers\MuaSanPhamController@unactive_muasanpham');
Route::get('/active-muasanpham/{muaMa}', 'App\Http\Controllers\MuaSanPhamController@active_muasanpham');
Route::post('/save-muasanpham', 'App\Http\Controllers\MuaSanPhamController@save_muasanpham');
Route::post('/update-muasanpham/{muaMa}', 'App\Http\Controllers\MuaSanPhamController@update_muasanpham');

//DungTich
Route::get('/all-dungtich', 'App\Http\Controllers\DungTichController@all_dungtich');
Route::get('/add-dungtich', 'App\Http\Controllers\DungTichController@add_dungtich');
Route::get('/edit-dungtich/{dtMa}', 'App\Http\Controllers\DungTichController@edit_dungtich');
Route::get('/delete-dungtich/{dtMa}', 'App\Http\Controllers\DungTichController@delete_dungtich');
Route::post('/save-dungtich', 'App\Http\Controllers\DungTichController@save_dungtich');
Route::post('/update-dungtich/{dtMa}', 'App\Http\Controllers\DungTichController@update_dungtich');

//SanPham
Route::get('/all-sanpham', 'App\Http\Controllers\SanPhamController@all_sanpham');
Route::get('/add-sanpham', 'App\Http\Controllers\SanPhamController@add_sanpham');
Route::get('/edit-sanpham/{spMa}', 'App\Http\Controllers\SanPhamController@edit_sanpham');
Route::get('/delete-sanpham/{spMa}', 'App\Http\Controllers\SanPhamController@delete_sanpham');
Route::get('/unactive-sanpham/{spMa}', 'App\Http\Controllers\SanPhamController@unactive_sanpham');
Route::get('/active-sanpham/{spMa}', 'App\Http\Controllers\SanPhamController@active_sanpham');
Route::post('/save-sanpham', 'App\Http\Controllers\SanPhamController@save_sanpham');
Route::post('/update-sanpham/{spMa}', 'App\Http\Controllers\SanPhamController@update_sanpham');

//Cart
Route::get('/show-cart', 'App\Http\Controllers\CartController@show_cart');
Route::get('/show-cart-quantity', 'App\Http\Controllers\CartController@show_cart_quantity');
Route::post('/add-cart', 'App\Http\Controllers\CartController@add_cart');
Route::get('/delete-cart/{session_id}', 'App\Http\Controllers\CartController@delete_cart');
Route::post('/update-cart', 'App\Http\Controllers\CartController@update_cart');
Route::post('/save-cart', 'App\Http\Controllers\CartController@save_cart');

Route::post('/select-delivery-home', 'App\Http\Controllers\CartController@select_delivery_home');
Route::post('/calculate-phivanchuyen', 'App\Http\Controllers\CartController@calculate_phivanchuyen');
Route::get('/del-phivanchuyen', 'App\Http\Controllers\CartController@del_phivanchuyen');

//Checkout
Route::get('/login-checkout', 'App\Http\Controllers\CheckoutController@login_checkout');
Route::get('/logout-checkout', 'App\Http\Controllers\CheckoutController@logout_checkout');
Route::post('/login-customer', 'App\Http\Controllers\CheckoutController@login_customer');
Route::post('/add-customer', 'App\Http\Controllers\CheckoutController@add_customer');
Route::get('/show-checkout', 'App\Http\Controllers\CheckoutController@show_checkout');
Route::post('/confirm-order', 'App\Http\Controllers\CheckoutController@confirm_order');

//Order
Route::get('/view-donhang/{dhCode}', 'App\Http\Controllers\DatHangController@view_donhang');
Route::get('/manage-donhang', 'App\Http\Controllers\DatHangController@manage_donhang');
Route::post('/update-donhang-soluong', 'App\Http\Controllers\DatHangController@update_donhang_soluong');
Route::post('/update-soluong', 'App\Http\Controllers\DatHangController@update_soluong');
Route::get('/history', 'App\Http\Controllers\DatHangController@history_donhang');
Route::get('/view-history-donhang/{dhCode}', 'App\Http\Controllers\DatHangController@view_history_donhang');
Route::post('/huy-don-hang', 'App\Http\Controllers\DatHangController@huy_don_hang');
Route::post('/huy-don-hang-manage', 'App\Http\Controllers\DatHangController@huy_don_hang_manage');


//Send Mail
Route::get('/send-mail', 'App\Http\Controllers\MailController@send_mail');
Route::get('/quen-mat-khau', 'App\Http\Controllers\MailController@quen_mat_khau');
Route::post('/recover-pass', 'App\Http\Controllers\MailController@recover_pass');
Route::get('/update-new-pass', 'App\Http\Controllers\MailController@update_new_pass');
Route::post('/reset-new-pass', 'App\Http\Controllers\MailController@reset_new_pass');
Route::get('/create-account/{email}/{token}', 'App\Http\Controllers\CheckoutController@create_account');
Route::get('/mail-kich-hoat', 'App\Http\Controllers\CheckoutController@mail_kich_hoat');
Route::get('/kich-hoat-tai-khoan', 'App\Http\Controllers\CheckoutController@kich_hoat_tai_khoan');
Route::post('/gui-mail-kich-hoat', 'App\Http\Controllers\CheckoutController@gui_mail_kich_hoat');

//MaGiamGia
Route::post('/check-magiamgia', 'App\Http\Controllers\CartController@check_magiamgia');
Route::get('/unset-magiamgia', 'App\Http\Controllers\CartController@unset_magiamgia');

Route::get('/insert-magiamgia', 'App\Http\Controllers\MaGiamGiaController@insert_magiamgia');
Route::post('/insert-magiamgia-code', 'App\Http\Controllers\MaGiamGiaController@insert_magiamgia_code');
Route::get('/list-magiamgia', 'App\Http\Controllers\MaGiamGiaController@list_magiamgia');
Route::get('/edit-magiamgia/{mggMa}', 'App\Http\Controllers\MaGiamGiaController@edit_magiamgia');
Route::post('/update-magiamgia/{mggMa}', 'App\Http\Controllers\MaGiamGiaController@update_magiamgia');
Route::get('/delete-magiamgia/{mggMa}', 'App\Http\Controllers\MaGiamGiaController@delete_magiamgia');

//Van chuyen
Route::get('/delivery', 'App\Http\Controllers\VanChuyenController@delivery');
Route::post('/select-delivery', 'App\Http\Controllers\VanChuyenController@select_delivery');
Route::post('/insert-delivery', 'App\Http\Controllers\VanChuyenController@insert_delivery');
Route::post('/select-phivanchuyen', 'App\Http\Controllers\VanChuyenController@select_phivanchuyen');
Route::post('/update-phivanchuyen', 'App\Http\Controllers\VanChuyenController@update_phivanchuyen');


//Banner
Route::get('/manage-banner', 'App\Http\Controllers\BannerController@manage_banner');
Route::get('/add-banner', 'App\Http\Controllers\BannerController@add_banner');
Route::post('/insert-banner', 'App\Http\Controllers\BannerController@insert_banner');
Route::get('/unactive-banner/{sliderMa}', 'App\Http\Controllers\BannerController@unactive_banner');
Route::get('/active-banner/{sliderMa}', 'App\Http\Controllers\BannerController@active_banner');
Route::get('/delete-banner/{sliderMa}', 'App\Http\Controllers\BannerController@delete_banner');
Route::get('/edit-banner/{sliderMa}', 'App\Http\Controllers\BannerController@edit_banner');
Route::post('/update-banner/{sliderMa}', 'App\Http\Controllers\BannerController@update_banner');

//Gallery
Route::get('/add-gallery/{spMa}', 'App\Http\Controllers\GalleryController@add_gallery');
Route::post('/select-gallery', 'App\Http\Controllers\GalleryController@select_gallery');
Route::post('/insert-gallery/{spMa}', 'App\Http\Controllers\GalleryController@insert_gallery');
Route::post('/update-gallery-name', 'App\Http\Controllers\GalleryController@update_gallery_name');
Route::post('/delete-gallery', 'App\Http\Controllers\GalleryController@delete_gallery');
Route::post('/update-gallery', 'App\Http\Controllers\GalleryController@update_gallery');

//Comment
Route::post('/load-comment', 'App\Http\Controllers\SanPhamController@load_comment');
Route::post('/send-comment', 'App\Http\Controllers\SanPhamController@send_comment');
Route::get('/comment', 'App\Http\Controllers\SanPhamController@list_comment');
Route::post('/allow-comment', 'App\Http\Controllers\SanPhamController@allow_comment');
Route::post('/reply-comment', 'App\Http\Controllers\SanPhamController@reply_comment');
Route::get('/delete-comment/{blMa}', 'App\Http\Controllers\SanPhamController@delete_comment');

//Bieu do
Route::post('/filter-by-date', 'App\Http\Controllers\AdminController@filter_by_date');
Route::post('/dashboard-filter', 'App\Http\Controllers\AdminController@dashboard_filter');
Route::post('/days-order', 'App\Http\Controllers\AdminController@days_order');
