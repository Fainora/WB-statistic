<?php

namespace App\Http\Controllers\WB;

use App\Http\Controllers\WB\wbStatisticController;
use Illuminate\Support\Facades\Log;

class wbGetDataController extends wbStatisticController
{
    public function getIncomes($data) {
        $dateFrom = app(wbGetDateFromController::class)->getIncomesDateFrom();
        $incomes = $this->getJsonData($data, 'incomes', $dateFrom);

        try {
            if(count($incomes) === 0) {
                Log::info("Новых Incomes от $dateFrom не найдено");
            } else {
                app(wbAddDataController::class)->addIncomes($incomes);
            }
        } catch (\Throwable $th) {
            Log::alert(__METHOD__ . ' : ' . $th->getMessage());
        }
    }

    public function getStocks($data) {
        $dateFrom = app(wbGetDateFromController::class)->getStocksDateFrom();
        $stocks = $this->getJsonData($data, 'stocks', $dateFrom);
        try {
            if(count($stocks) === 0) {
                Log::info("Новых Stocks от $dateFrom не найдено");
            } else {
                app(wbAddDataController::class)->addStocks($stocks);
            }
        } catch (\Throwable $th) {
            Log::alert(__METHOD__ . ' : ' . $th->getMessage());
        }
    }

    public function getOrders($data) {
        $dateFrom = app(wbGetDateFromController::class)->getOrdersDateFrom();
        $orders = $this->getJsonData($data, 'orders', $dateFrom);
        try {
            if(count($orders) === 0) {
                Log::info("Новых Orders от $dateFrom не найдено");
            } else {
                app(wbAddDataController::class)->addOrders($orders);
            }
        } catch (\Throwable $th) {
            Log::alert(__METHOD__ . ' : ' . $th->getMessage());
        }
    }

    public function getSales($data) {
        $dateFrom = app(wbGetDateFromController::class)->getSalesDateFrom();
        $sales = $this->getJsonData($data, 'sales', $dateFrom);
        try {
            if(count($sales) === 0) {
                Log::info("Новых Sales от $dateFrom не найдено");
            } else {
                app(wbAddDataController::class)->addSales($sales);
            }
        } catch (\Throwable $th) {
            Log::alert(__METHOD__ . ' : ' . $th->getMessage());
        }
    }

    public function getReportDetailByPeriod($data) {
        $dateFrom = app(wbGetDateFromController::class)->getReportDetailByPeriodDateFrom();
        $report = $this->getJsonData($data, 'reportDetailByPeriod', $dateFrom);

        try {
            if(count($report) === 0) {
                Log::info("Новых ReportDetailByPeriod от $dateFrom не найдено");
            } else {
                app(wbAddDataController::class)->addReportDetailByPeriod($report);
            }
        } catch (\Throwable $th) {
            Log::alert(__METHOD__ . ' : ' . $th->getMessage());
        }
    }

    public function getExciseGoods($data) {
        $dateFrom = app(wbGetDateFromController::class)->getExciseGoodsDateFrom();
        $excise_goods = $this->getJsonData($data, 'excise-goods', $dateFrom);

        try {
            if(count($excise_goods) === 0) {
                Log::info("Новых ExciseGoods от $dateFrom не найдено");
            } else {
                app(wbAddDataController::class)->addExciseGoods($excise_goods);
            }
        } catch (\Throwable $th) {
            Log::alert(__METHOD__ . ' : ' . $th->getMessage());
        }
    }
}
