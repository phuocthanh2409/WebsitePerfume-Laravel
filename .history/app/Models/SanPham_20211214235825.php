<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['blNoiDung', 'blTen', 'blNgay', 'spMa'];
    protected $primaryKey = 'blMa';
    protected $table = 'binhluan';
}
