<?php

namespace Yhapps\YhappsAccounting\Commands;

use Illuminate\Console\Command;

class YhappsAccountingCommand extends Command
{
    public $signature = 'yhappsaccounting';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
