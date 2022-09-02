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
        Schema::create('report_detail_by_period', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('realizationreport_id');
            $table->string('suppliercontract_code', 255)->nullable();
            $table->unsignedBigInteger('rrd_id');
            $table->unsignedBigInteger('gi_id');
            $table->string('subject_name', 100)->nullable();
            $table->unsignedBigInteger('nm_id')->nullable();
            $table->string('brand_name', 100)->nullable();
            $table->string('sa_name', 100)->nullable();
            $table->string('ts_name', 15)->nullable();
            $table->string('barcode');
            $table->string('doc_type_name', 100);
            $table->integer('quantity');
            $table->double('retail_price', 8, 2);
            $table->double('retail_amount', 8, 2);
            $table->double('sale_percent', 8, 2);
            $table->double('commission_percent', 8, 2);
            $table->string('office_name', 100)->nullable();
            $table->string('supplier_oper_name', 100);
            $table->dateTime('order_dt', 0);
            $table->dateTime('sale_dt', 0);
            $table->dateTime('rr_dt', 0);
            $table->unsignedBigInteger('shk_id');

            $table->double('retail_price_withdisc_rub', 8, 2);
            $table->integer('delivery_amount');
            $table->integer('return_amount');
            $table->double('delivery_rub', 8, 2);
            $table->string('gi_box_type_name', 100);
            $table->integer('product_discount_for_report');
            $table->integer('supplier_promo');
            $table->unsignedBigInteger('rid');
            $table->double('ppvz_spp_prc', 8, 2);
            $table->double('ppvz_kvw_prc_base', 8, 2);
            $table->double('ppvz_kvw_prc', 8, 2);
            $table->double('ppvz_sales_commission', 8, 2);
            $table->double('ppvz_for_pay', 8, 2);
            $table->double('ppvz_reward', 8, 2);
            $table->double('ppvz_vw', 8, 2);
            $table->double('ppvz_vw_nds', 8, 2);
            $table->unsignedBigInteger('ppvz_office_id');
            $table->string('ppvz_office_name', 100)->nullable();
            $table->unsignedBigInteger('ppvz_supplier_id');
            $table->string('ppvz_supplier_name', 100);
            $table->string('ppvz_inn', 100);
            $table->string('declaration_number', 100);
            $table->string('sticker_id');
            $table->string('site_country', 100);
            $table->integer('penalty');
            $table->integer('additional_payment');
            $table->string('srid', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_detail_by_period');
    }
};
