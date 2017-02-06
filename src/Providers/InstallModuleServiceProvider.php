<?php
/**
 * ModuleAlias: news
 * ModuleName: news
 * Description: The script will run when you install module. Suggest are create database, publish files, etc...
 * @author: noname
 * @version: 1.0
 * @package: PhambinhCMS
 */
namespace App\Modules\News\Src\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use Illuminate\Database\Schema\Blueprint;

class InstallModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        app()->booted(function () {
            $this->booted();
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }

    private function booted()
    {
        $this->createSchema();
    }

    private function createSchema()
    {
        // code here...
    }
}