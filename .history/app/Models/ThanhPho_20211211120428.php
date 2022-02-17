<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThanhPho extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['tenTp', 'type'];
    protected $primaryKey = 'muaMa';
    protected $table = 'muasanpham';
}
