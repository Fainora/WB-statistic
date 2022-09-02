<?php

namespace App\Models\WB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    use HasFactory;

    protected $table = 'stocks';
    protected $guarded = false;
    public $timestamps = false;
    protected $fillable = [
        'lastChangeDate', 'supplierArticle', 'techSize',
        'barcode', 'quantity', 'isSupply', 'isRealization',
        'quantityFull', 'quantityNotInOrders', 'warehouseName',
        'inWayToClient', 'inWayFromClient', 'nmId', 'subject',
        'category', 'daysOnSite', 'brand', 'SCCode',
        'warehouse', 'Price', 'Discount'
    ];
}
