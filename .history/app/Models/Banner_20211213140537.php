<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['sliderTen', 'sliderHinhAnh', 'sliderTrangThai', 'sliderMoTa', 'spSoLuongMua', 'spKhuyenMai', 'spPhiVanChuyen'];
    protected $primaryKey = 'ctdhMa';
    protected $table = 'chitietdonhang';
}
