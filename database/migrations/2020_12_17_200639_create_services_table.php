<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id('id');

            $table->foreignId('user_id')
                  ->constrained();

            $table->foreignId('category_id')
                  ->constrained();

            $table->foreignId('city_id')
                  ->constrained();

            $table->foreignId('departament_id')
                  ->constrained();

            $table->foreignId('locality_id')
                  ->constrained();

            $table->string('name')
                  ->nullable();

            $table->text('description')
                  ->nullable();

            $table->jsonb('features')
                  ->nullable();

            $table->string('address')
                  ->nullable();

            $table->decimal('price', 8, 2)
                  ->nullable();

            $table->timestamp('published_at')
                  ->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
