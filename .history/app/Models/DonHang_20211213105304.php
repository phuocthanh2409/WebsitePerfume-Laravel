<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['khMa', 'shippingMa', 'dhTrangThai', 'dhCode', 'created_at'];
    protected $primaryKey = 'dhMa';
    protected $table = 'donhang';

    public function product()
    {
        return $this->belongsTo('App\Models\SanPham', 'spMa');
    }
}
