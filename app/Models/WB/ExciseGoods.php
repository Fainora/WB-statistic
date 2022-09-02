<?php

namespace App\Models\WB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExciseGoods extends Model
{
    use HasFactory;

    protected $table = 'excise_goods';
    protected $guarded = false;
    public $timestamps = false;
}
