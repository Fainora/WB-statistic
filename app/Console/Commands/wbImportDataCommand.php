<?php

namespace App\Console\Commands;

use App\Components\wbImportData;
use App\Http\Controllers\WB\wbStatisticController;
use Illuminate\Console\Command;

class wbImportDataCommand extends Command
{
    protected $signature = 'wb:importdata';
    protected $description = 'Import data from WB api';

    public function handle()
    {
        info('Starting to send WB data');

        $import = new wbStatisticController();
        $import->getWbStatistic();

        info('Done sending WB data');
    }
}
