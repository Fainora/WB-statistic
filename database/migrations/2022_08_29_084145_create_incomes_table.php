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
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('incomeid');
            $table->string('Number', 40);
            $table->dateTime('Date');
            $table->dateTime('lastChangeDate');
            $table->string('SupplierArticle', 75);
            $table->string('TechSize', 30);
            $table->string('Barcode', 30);
            $table->integer('Quantity');
            $table->decimal('totalPrice', 8, 2);
            $table->dateTime('dateClose');
            $table->string('warehouseName', 50);
            $table->integer('nmid');
            $table->string('status', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incomes');
    }
};
