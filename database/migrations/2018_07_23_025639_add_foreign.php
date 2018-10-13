<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ( Schema::hasTable('turns')  && Schema::hasTable('activities')) {
            Schema::table('turns', function ($table) {
                $table->foreign('activity_id')->references('id')->on('activities');
            });
        }
        if ( Schema::hasTable('clients') && Schema::hasTable('cities') ) {
            Schema::table('clients', function ($table) {
                $table->foreign('city_id')->references('id')->on('cities');
            });
        }
        if ( Schema::hasTable('purchases') && Schema::hasTable('turns') && Schema::hasTable('clients')) {
            Schema::table('purchases', function ($table) {
                $table->foreign('client_id')->references('id')->on('clients');
                $table->foreign('turn_id')->references('id')->on('turns');
            });
        }
        if ( Schema::hasTable('states')) {
            Schema::table('cities', function ($table) {
                $table->foreign('state_id')->references('id')->on('states');
            });
        }
        if ( Schema::hasTable('activities') && Schema::hasTable('activity_images') ) {
            Schema::table('activity_images', function ($table) {
                $table->foreign('activity_id')->references('id')->on('activities');
            });
        }
        if ( Schema::hasTable('activities') && Schema::hasTable('activity_prices') ) {
            Schema::table('activity_prices', function ($table) {
                $table->foreign('activity_id')->references('id')->on('activities');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
