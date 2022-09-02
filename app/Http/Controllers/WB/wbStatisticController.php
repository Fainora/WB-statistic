<?php

namespace App\Http\Controllers\WB;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;

class wbStatisticController extends Controller
{
    public $dateFrom = '2022-06-01T00:00:00Z';

    public function __construct()
    {
       $this->apiUrl = env("API_URL");
       $this->apiKey = env("API_TOKEN");
    }

    //Данную функцию можно в Job (queue) запихнуть
    public function getWbStatistic() {
        $dateTo = Carbon::now()->toDateString();
        $data['key'] = $this->apiKey;

        app(wbGetDataController::class)->getIncomes($data, $this->dateFrom);
        app(wbGetDataController::class)->getStocks($data, $this->dateFrom);
        app(wbGetDataController::class)->getOrders($data, $this->dateFrom);
        app(wbGetDataController::class)->getSales($data, $this->dateFrom);
        app(wbGetDataController::class)->getExciseGoods($data, $this->dateFrom);

        $data['limit'] = 1000;
        $data['rrdid'] = 0;
        $data['dateTo'] = $dateTo;
        app(wbGetDataController::class)->getReportDetailByPeriod($data, $this->dateFrom);
    }

    private function getApiUrl($data, $path) {
        return $this->apiUrl . $path . '?' . http_build_query($data);
    }

    //Получаем данные в формает Json по Api
    public function getJsonData($data, $path, $dateFrom) {
        $url = $this->getApiUrl($data, $path) . '&dateFrom=' . $dateFrom;

        try {
            $client = new Client();
            $response = $client->request('GET', $url);
            $result = json_decode($response->getBody()->getContents(), true);

            return $result;
        } catch (ClientException $exception) {
            Log::alert(__METHOD__ . ' : ' . $exception->getMessage());
        }
    }
}
