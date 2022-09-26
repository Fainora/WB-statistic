<?php

namespace App\Jobs;

use App\Http\Controllers\WB\wbGetDataController;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class wbUpload implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // Дата, с которой начинаем загрузку данных
    public $dateFrom = '2022-06-01T00:00:00Z';
    private ?string $apiUrl;
    private ?string $apiKey;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->apiUrl = env("API_URL");
        $this->apiKey = env("API_TOKEN");
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $dateTo = Carbon::now()->toDateString();
        $data['key'] = $this->apiKey;

        try {
            info('Starting to send WB data');

            (new wbGetDataController)->getIncomes($data, $this->dateFrom);
            (new wbGetDataController)->getIncomes($data, $this->dateFrom);
            (new wbGetDataController)->getStocks($data, $this->dateFrom);
            (new wbGetDataController)->getOrders($data, $this->dateFrom);
            (new wbGetDataController)->getSales($data, $this->dateFrom);
            (new wbGetDataController)->getExciseGoods($data, $this->dateFrom);

            $data['limit'] = 1000;
            $data['rrdid'] = 0;
            $data['dateTo'] = $dateTo;
            (new wbGetDataController)->getReportDetailByPeriod($data, $this->dateFrom);
            
            info('Done sending WB data');
        } catch (\Throwable $th) {
            Log::alert(__METHOD__ . ' : ' . $th->getMessage());
        }
    }
}
