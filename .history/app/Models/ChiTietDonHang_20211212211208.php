<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['khMa', 'shippingMa', 'dhTrangThai', 'dhCode'];
    protected $primaryKey = 'dhMa';
    protected $table = 'donhang';
}
