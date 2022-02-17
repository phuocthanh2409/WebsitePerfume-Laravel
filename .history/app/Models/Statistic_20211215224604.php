<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['order_data', 'sales', 'profit', 'quantity', 'total_order'];
    protected $primaryKey = 'spMa';
    protected $table = 'sanpham';
}
