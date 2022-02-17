<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaGiamGia extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['mggTen', 'mggCode', 'mggSoLuong', 'mggPhuongThuc', 'mggGiaTri',];
    protected $primaryKey = 'mggMa';
    protected $table = 'magiamgia';
}
