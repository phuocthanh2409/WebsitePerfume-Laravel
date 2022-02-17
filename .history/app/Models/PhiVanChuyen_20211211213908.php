<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhiVanChuyen extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['matp', 'maqh', 'vcPhi'];
    protected $primaryKey = 'vcMa';
    protected $table = 'phivanchuyen';

    public function thanhpho()
    {
        return $this->belongsTo('App\Models\ThanhPho', '');
    }
}
