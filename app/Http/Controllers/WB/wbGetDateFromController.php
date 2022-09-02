<?php

namespace App\Http\Controllers\WB;

use App\Http\Controllers\WB\wbStatisticController;
use App\Models\WB\ExciseGoods;
use App\Models\WB\Incomes;
use App\Models\WB\Orders;
use App\Models\WB\ReportDetailByPeriod;
use App\Models\WB\Sales;
use App\Models\WB\Stocks;

class wbGetDateFromController extends wbStatisticController
{
    public function getIncomesDateFrom() {
        $lastChangeDate = Incomes::max('lastChangeDate');
        return $lastChangeDate ?? $this->dateFrom;
    }

    public function getStocksDateFrom() {
        $lastChangeDate = Stocks::max('lastChangeDate');
        return $lastChangeDate ?? $this->dateFrom;
    }

    public function getOrdersDateFrom() {
        $lastChangeDate = Orders::max('lastChangeDate');
        return $lastChangeDate ?? $this->dateFrom;
    }

    public function getSalesDateFrom() {
        $lastChangeDate = Sales::max('lastChangeDate');
        return $lastChangeDate ?? $this->dateFrom;
    }

    public function getReportDetailByPeriodDateFrom() {
        $lastChangeDate = ReportDetailByPeriod::max('rr_dt');
        return $lastChangeDate ?? $this->dateFrom;
    }

    public function getExciseGoodsDateFrom() {
        $lastChangeDate = ExciseGoods::max('date');
        return $lastChangeDate ?? $this->dateFrom;
    }
}
