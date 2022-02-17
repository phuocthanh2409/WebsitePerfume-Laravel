<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LienHe extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['ttLienHe', 'ttMap', 'ttHinhAnh'];
    protected $primaryKey = 'khMa';
    protected $table = 'khachhang';
}
