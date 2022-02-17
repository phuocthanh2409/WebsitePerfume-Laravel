<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thuonghieu extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['thTen', 'thMoTa', 'thTrangThai'];
    protected $primaryKey = 'thMa';
    protected $table = 'thuonghieu';
}
