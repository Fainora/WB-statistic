<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('gNumber', 50);
            $table->dateTime('Date');
            $table->dateTime('lastChangeDate');
            $table->string('supplierArticle', 75);
            $table->string('techSize', 30);
            $table->string('barcode', 30);
            $table->decimal('totalPrice', 8, 2);
            $table->double('discountPercent', 8, 2);
            $table->integer('isSupply');
            $table->integer('isRealization');
            $table->double('promoCodeDiscount', 8, 2);
            $table->string('warehouseName', 50);
            $table->string('countryName', 200);
            $table->string('oblastOkrugName', 200);
            $table->string('regionName', 200);
            $table->unsignedBigInteger('incomeID');
            $table->string('saleID', 15);
            $table->unsignedBigInteger('Odid');
            $table->double('spp', 8, 2);
            $table->decimal('forpay', 8, 2);
            $table->decimal('finished_price', 8, 2);
            $table->decimal('pricewithdisc', 8, 2);
            $table->unsignedBigInteger('nmId');
            $table->string('subject', 50);
            $table->string('category', 50);
            $table->string('brand', 50);
            $table->string('sticker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
