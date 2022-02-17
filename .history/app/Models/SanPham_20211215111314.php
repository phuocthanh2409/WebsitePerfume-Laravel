<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['loaiMa', 'loaiMa', 'muaMa', 'dtMa', 'spTen', 'spGia', 'spMoTa', 'spSoLuong', 'spSoLuongDaBan', 'spHinhAnh', 'spTrangThai'];
    protected $primaryKey = 'spMa';
    protected $table = 'sanpham';

    public function product()
    {
        return $this->hasMany('App\Models\BinhLuan');
    }
}
