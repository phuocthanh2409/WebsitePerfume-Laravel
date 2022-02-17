<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['dhCode', 'spMa', 'spTen', 'spGia', 'spSoLuongMua'];
    protected $primaryKey = 'dhMa';
    protected $table = 'donhang';
}
