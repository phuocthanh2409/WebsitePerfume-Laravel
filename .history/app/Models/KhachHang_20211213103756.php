<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['khTen', 'khEmail', 'khEmail', 'khEmail'];
    protected $primaryKey = 'loaiMa';
    protected $table = 'loaisanpham';
}
