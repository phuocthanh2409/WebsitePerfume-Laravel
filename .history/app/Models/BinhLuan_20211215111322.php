<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['blNoiDung', 'blTen', 'blNgay', 'spMa', 'blTrangThai'];
    protected $primaryKey = 'blMa';
    protected $table = 'binhluan';

    public function product()
    {
        return $this->belongsTo('App\Models\SanPham', 'spMa');
    }
}
