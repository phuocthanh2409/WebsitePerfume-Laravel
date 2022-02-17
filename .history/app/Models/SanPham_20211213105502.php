<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['loaiMa', 'loaiMa', 'muaMa', 'dtMa', 'spTen', 'spGia', 'spMoTa', 'spSoLuong', 'spHinhAnh', 'spTrangThai'];
    protected $primaryKey = 'spMa';
    protected $table = 'sanpham';
}
