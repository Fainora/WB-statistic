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
        Schema::create('excise_goods', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->integer('inn');
            $table->double('finishedPrice', 8, 2);
            $table->unsignedBigInteger('operationTypeId');
            $table->dateTime('fiscalDt');
            $table->integer('docNumber');
            $table->unsignedBigInteger('fnNumber');
            $table->unsignedBigInteger('regNumber');
            $table->string('excise', 255);
            $table->dateTime('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('excise_goods');
    }
};
