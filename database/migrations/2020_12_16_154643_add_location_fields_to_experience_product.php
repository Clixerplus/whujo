<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationFieldsToExperienceProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('experiences', function (Blueprint $table) {

            $table->string('state_id')
                  ->references('id')
                  ->on('states')->default('');

            $table->string('city_id')
                  ->references('id')
                  ->on('cities')->default('');

            $table->string('locality_id')
                  ->references('id')
                  ->on('localities')->default('');

            $table->string('address')
                  ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('experiences', function (Blueprint $table) {
            $table->dropColumn('city_id');
            $table->dropColumn('state_id');
            $table->dropColumn('locality_id');
            $table->dropColumn('address');
        });
    }
}
