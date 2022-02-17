<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuaSanPham extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['muaTen', 'muaMoTa', 'muaTrangThai'];
    protected $primaryKey = 'muaMa';
    protected $table = 'thuonghieu';
}
