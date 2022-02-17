<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhiVanChuyen extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['matp', 'maqh', 'vcPhi'];
    protected $primaryKey = 'maqh';
    protected $table = 'quanhuyen';
}
