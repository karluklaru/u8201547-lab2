<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Banner;
use Illuminate\Support\Facades\DB;

class DeactivateBanner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'banner:deactivate {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deactivate field is_active in table banners (change value to false)';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try { 
            $bannerId = (int)$this->argument('id');

            DB::table('banners')
            ->where('id', $bannerId)
            ->update(['is_active' => false]);
        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            $this->error("Banner with id <$bannerId> not exist");
        }
    }

}
