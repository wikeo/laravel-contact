<?php

namespace Wikeo\LaravelContact\Commands;

use Illuminate\Console\Command;

class LaravelContactCommand extends Command
{
    public $signature = 'laravel-contact';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
