<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class GenerateS2SCToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 's2sc:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates a new S2SC token.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $token = Str::uuid();

        Cache::put('s2sc_token', $token);

        $this->info("Successfully generated a new S2SC Token: " . $token);

        return Command::SUCCESS;
    }
}
