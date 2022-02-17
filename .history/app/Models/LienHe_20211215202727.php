<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LienHe extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['ttLienHe', 'ttMap', 'ttHinhAnh', 'ttFanpage'];
    protected $primaryKey = 'ttMa';
    protected $table = 'thongtincuahang';
}
