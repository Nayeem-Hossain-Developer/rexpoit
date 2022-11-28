<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Wallet;
use DB;

class salaryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rexoit:salary';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command use for give salary to employee';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   
        Wallet::query()->update(['cash_amount' => DB::raw('`cash_amount` + `salary_amount`')]);
        $this->info("success");
        // return Command::SUCCESS;
    }
}
