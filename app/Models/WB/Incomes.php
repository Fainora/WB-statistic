<?php

namespace App\Models\WB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incomes extends Model
{
    use HasFactory;

    protected $table = 'incomes';
    protected $guarded = false;
    public $timestamps = false;
}
