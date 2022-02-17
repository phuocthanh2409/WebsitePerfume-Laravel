<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuanTriVien extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['qtEmail', 'qtTen', 'qtMatKhau', 'qtSoDienThoai'];
    protected $primaryKey = 'qtMa';
    protected $table = 'quan_tri_vien';
}
