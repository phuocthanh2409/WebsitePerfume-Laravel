<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['shippingTen', 'shippingEmail', 'shippingDiaChi', 'shippingSoDienThoai', 'shippingGhiChu', 'shippingPhuongThuc'];
    protected $primaryKey = 'shippingMa';
    protected $table = 'shipping';
}
