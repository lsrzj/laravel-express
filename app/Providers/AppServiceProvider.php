<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\SQLiteConnection;
use Illuminate\Support\Facades\DB;
use \Doctrine\DBAL\Types\Type;
use App\Doctrine\CarbonType;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        //Enabling foreign keys constraints on SQLite connections
        if (DB::connection() instanceof SQLiteConnection) {
            DB::statement(DB::raw('PRAGMA foreign_keys=1'));
        }

        Type::overrideType('datetime', CarbonType::class);        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
