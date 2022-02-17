<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaGiamGia extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['mggTen', 'mggCode', 'mggSoLuong', 'mggGiaTri', 'mggPhuongThuc'];
    protected $primaryKey = 'loaiMa';
    protected $table = 'loaisanpham';
}
