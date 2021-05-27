<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSiteSettingsTable extends Migration
{

    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('logo')->nullable();
            $table->string('address')->nullable();

            $table->string('website_name')->nullable();
            $table->string('favicon')->nullable();
            $table->text('language')->nullable();
            });
    }


    public function down()
    {
        Schema::drop('site_settings');
    }
}
