<?php

namespace App\Http\Controllers\WB;

use App\Http\Controllers\WB\wbStatisticController;
use App\Models\WB\ExciseGoods;
use App\Models\WB\Incomes;
use App\Models\WB\Orders;
use App\Models\WB\ReportDetailByPeriod;
use App\Models\WB\Sales;
use App\Models\WB\Stocks;
use Illuminate\Support\Facades\Log;

class wbAddDataController extends wbStatisticController
{
    public function addIncomes($incomes) {
        if ($incomes) {
            foreach ($incomes as $income) {
                try {
                    Incomes::insert([
                        'incomeid' => $income['incomeid'],
                        'Number' => $income['Number'],
                        'Date' => $income['Date'],
                        'lastChangeDate' => $income['lastChangeDate'],
                        'SupplierArticle' => $income['SupplierArticle'],
                        'TechSize' => $income['TechSize'],
                        'Barcode' => $income['Barcode'],
                        'Quantity' => $income['Quantity'],
                        'totalPrice' => $income['totalPrice'],
                        'dateClose' => $income['dateClose'],
                        'warehouseName' => $income['warehouseName'],
                        'nmid' => $income['nmid'],
                        'status' => $income['status'],
                    ]);
                } catch (\Throwable $th) {
                    Log::alert(__METHOD__ . ' : ' . $th->getMessage());
                }
            }
        } else {
            Log::info("Данные Incomes не обнаружены");
        }
    }

    public function addStocks($stocks) {
        if ($stocks) {
            foreach ($stocks as $stock) {
                try {
                    Stocks::insert(
                        [
                            'lastChangeDate' => $stock['lastChangeDate'],
                            'supplierArticle' => $stock['supplierArticle'],
                            'techSize' => $stock['techSize'],
                            'Barcode' => $stock['barcode'],
                            'Quantity' => $stock['quantity'],
                            'isSupply' => $stock['isSupply'],
                            'isRealization' => $stock['isRealization'],
                            'quantityFull' => $stock['quantityFull'],
                            'quantityNotInOrders' => $stock['quantityNotInOrders'],
                            'warehouseName' => $stock['warehouseName'],
                            'inWayToClient' => $stock['inWayToClient'],
                            'inWayFromClient' => $stock['inWayFromClient'],
                            'nmid' => $stock['nmId'],
                            'subject' => $stock['subject'],
                            'category' => $stock['category'],
                            'DaysOnSite' => $stock['daysOnSite'],
                            'brand' => $stock['brand'],
                            'SCCode' => $stock['SCCode'],
                            'Warehouse' => $stock['warehouse'],
                            'Price' => $stock['Price'],
                            'Discount' => $stock['Discount']
                        ]
                    );
                } catch (\Throwable $th) {
                    Log::alert(__METHOD__ . ' : ' . $th->getMessage());
                }
            }
        } else {
            Log::info("Данные Stocks не обнаружены");
        }
    }

    public function addOrders($orders) {
        if ($orders) {
            foreach ($orders as $order) {
                try {
                    Orders::insert([
                        'gNumber' => $order['gNumber'],
                        'date' => $order['date'],
                        'lastChangeDate' => $order['lastChangeDate'],
                        'supplierArticle' => $order['supplierArticle'],
                        'techSize' => $order['techSize'],
                        'barcode' => $order['barcode'],
                        'totalPrice' => $order['totalPrice'],
                        'discountPercent' => $order['discountPercent'],
                        'warehouseName' => $order['warehouseName'],
                        'oblast' => $order['oblast'],
                        'incomeID' => $order['incomeID'],
                        'odid' => $order['odid'],
                        'nmid' => $order['nmId'],
                        'subject' => $order['subject'],
                        'category' => $order['category'],
                        'brand' => $order['brand'],
                        'is_cancel' => $order['isCancel'],
                        'sticker' => $order['sticker']
                    ]);
                } catch (\Throwable $th) {
                    Log::alert(__METHOD__ . ' : ' . $th->getMessage());
                }
            }
        } else {
            Log::info("Данные Orders не обнаружены");
        }
    }

    public function addSales($sales) {
        if ($sales) {
            foreach ($sales as $sale) {
                try {
                    Sales::insert([
                        'gNumber' => $sale['gNumber'],
                        'Date' => $sale['date'],
                        'lastChangeDate' => $sale['lastChangeDate'],
                        'supplierArticle' => $sale['supplierArticle'],
                        'techSize' => $sale['techSize'],
                        'barcode' => $sale['barcode'],
                        'totalPrice' => $sale['totalPrice'],
                        'discountPercent' => $sale['discountPercent'],
                        'isSupply' => $sale['isSupply'],
                        'isRealization' => $sale['isRealization'],
                        'promoCodeDiscount' => $sale['promoCodeDiscount'],
                        'warehouseName' => $sale['warehouseName'],
                        'countryName' => $sale['countryName'],
                        'oblastOkrugName' => $sale['oblastOkrugName'],
                        'regionName' => $sale['regionName'],
                        'incomeID' => $sale['incomeID'],
                        'saleID' => $sale['saleID'],
                        'Odid' => $sale['odid'],
                        'spp' => $sale['spp'],
                        'forpay' => $sale['forPay'],
                        'finished_price' => $sale['finishedPrice'],
                        'pricewithdisc' => $sale['priceWithDisc'],
                        'nmId' => $sale['nmId'],
                        'subject' => $sale['subject'],
                        'category' => $sale['category'],
                        'brand' => $sale['brand'],
                        'sticker' => $sale['sticker']
                    ]);
                } catch (\Throwable $th) {
                    Log::alert(__METHOD__ . ' : ' . $th->getMessage());
                }
            }
        } else {
            Log::info("Данные Sales не обнаружены");
        }
    }

    public function addReportDetailByPeriod($reportDetailByPeriod) {
        if ($reportDetailByPeriod) {
            foreach ($reportDetailByPeriod as $report) {
                try {
                    ReportDetailByPeriod::insert([
                        'realizationreport_id' => $report['realizationreport_id'],
                        'suppliercontract_code' => $report['suppliercontract_code'],
                        'rrd_id' => $report['rrd_id'],
                        'gi_id' => $report['gi_id'],
                        'subject_name' => $report['subject_name'],
                        'nm_id' => $report['nm_id'],
                        'brand_name' => $report['brand_name'],
                        'sa_name' => $report['sa_name'],
                        'ts_name' => $report['ts_name'],
                        'barcode' => $report['barcode'],
                        'doc_type_name' => $report['doc_type_name'],
                        'quantity' => $report['quantity'],
                        'retail_price' => $report['retail_price'],
                        'retail_amount' => $report['retail_amount'],
                        'sale_percent' => $report['sale_percent'],
                        'commission_percent' => $report['commission_percent'],
                        'office_name' => $report['office_name'],
                        'supplier_oper_name' => $report['supplier_oper_name'],
                        'order_dt' => date("Y-m-d H:i:s", strtotime($report['order_dt'])),
                        'sale_dt' => date("Y-m-d H:i:s", strtotime($report['sale_dt'])),
                        'rr_dt' => date("Y-m-d H:i:s", strtotime($report['rr_dt'])),
                        'shk_id' => $report['shk_id'],

                        'retail_price_withdisc_rub' => $report['retail_price_withdisc_rub'],
                        'delivery_amount' => $report['delivery_amount'],
                        'return_amount' => $report['return_amount'],
                        'delivery_rub' => $report['delivery_rub'],
                        'gi_box_type_name' => $report['gi_box_type_name'],
                        'product_discount_for_report' => $report['product_discount_for_report'],
                        'supplier_promo' => $report['supplier_promo'],
                        'rid' => $report['rid'],
                        'ppvz_spp_prc' => $report['ppvz_spp_prc'],
                        'ppvz_kvw_prc_base' => $report['ppvz_kvw_prc_base'],
                        'ppvz_kvw_prc' => $report['ppvz_kvw_prc'],
                        'ppvz_sales_commission' => $report['ppvz_sales_commission'],
                        'ppvz_for_pay' => $report['ppvz_for_pay'],
                        'ppvz_reward' => $report['ppvz_reward'],
                        'ppvz_vw' => $report['ppvz_vw'],
                        'ppvz_vw_nds' => $report['ppvz_vw_nds'],
                        'ppvz_office_id' => $report['ppvz_office_id'],
                        'ppvz_office_name' => $report['ppvz_office_name'] ?? '',
                        'ppvz_supplier_id' => $report['ppvz_supplier_id'],
                        'ppvz_supplier_name' => $report['ppvz_supplier_name'],
                        'ppvz_inn' => $report['ppvz_inn'],
                        'declaration_number' => $report['declaration_number'],
                        'sticker_id' => $report['sticker_id'],
                        'site_country' => $report['site_country'],
                        'penalty' => $report['penalty'],
                        'additional_payment' => $report['additional_payment'],
                        'srid' => $report['srid']
                    ]);
                } catch (\Throwable $th) {
                    Log::alert(__METHOD__ . ' : ' . $th->getMessage());
                }
            }
        } else {
            Log::info("Данные ReportDetailByPeriod не обнаружены");
        }
    }

    public function addExciseGoods($exciseGoods) {
        if ($exciseGoods) {
            foreach ($exciseGoods as $exciseGood) {
                try {
                    ExciseGoods::insert([
                        'id' => $exciseGood['id'],
                        'inn' => $exciseGood['inn'],
                        'finishedPrice' => $exciseGood['finishedPrice'],
                        'operationTypeId' => $exciseGood['operationTypeId'],
                        'fiscalDt' => $exciseGood['fiscalDt'],
                        'docNumber' => $exciseGood['docNumber'],
                        'fnNumber' => $exciseGood['fnNumber'],
                        'regNumber' => $exciseGood['regNumber'],
                        'excise' => $exciseGood['excise'],
                        'date' => $exciseGood['date'],
                    ]);
                } catch (\Throwable $th) {
                    Log::alert(__METHOD__ . ' : ' . $th->getMessage());
                }
            }
        } else {
            Log::info("Данные ExciseGoods не обнаружены");
        }
    }
}
