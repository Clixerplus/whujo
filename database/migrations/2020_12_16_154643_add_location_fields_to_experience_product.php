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
            $table->foreignId('city_id')
                  ->nullable()
                  ->constrained();

            $table->foreignId('departament_id')
                  ->nullable()
                  ->constrained();

            $table->foreignId('locality_id')
                  ->nullable()
                  ->constrained();

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
            $table->dropForeign(['city_id']);
            $table->dropForeign(['departament_id']);
            $table->dropForeign(['locality_id']);
            $table->dropColumn('address');
        });
    }
}
