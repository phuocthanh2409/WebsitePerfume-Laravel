<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['galleryTen', 'galleryHinhAnh', 'spMa'];
    protected $primaryKey = 'khMa';
    protected $table = 'khachhang';
}
