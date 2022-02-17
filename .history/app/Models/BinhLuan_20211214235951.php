<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['blNoiDung', 'blTen', 'blNgay', 'spMa'];
    protected $primaryKey = 'ctdhMa';
    protected $table = 'chitietdonhang';
}
