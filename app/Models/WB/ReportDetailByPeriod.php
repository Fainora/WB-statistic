<?php

namespace App\Models\WB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportDetailByPeriod extends Model
{
    use HasFactory;

    protected $table = 'report_detail_by_period';
    protected $guarded = false;
    public $timestamps = false;
}
