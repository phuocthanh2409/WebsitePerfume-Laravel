<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['loaiTen', 'loaiMoTa', 'loaiTrangThai'];
    protected $primaryKey = 'loaiMa';
    protected $table = 'loaisanpham';
}
