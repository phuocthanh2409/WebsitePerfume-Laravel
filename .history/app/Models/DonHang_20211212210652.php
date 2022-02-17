<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['khMa', 'shippingMa', 'dhTrangThai'];
    protected $primaryKey = 'dhMa';
    protected $table = 'donhang';
}
