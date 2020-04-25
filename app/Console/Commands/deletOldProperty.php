<?php

namespace App\Console\Commands;

use App\Property;
use Carbon\Carbon;
use Illuminate\Console\Command;

class deletOldProperty extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:deletOldProperty';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Commad delet old Property in the table Property';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $message = Property::where('created_at', '<', Carbon::now()->subMinute(7))->delete();


    }
}
