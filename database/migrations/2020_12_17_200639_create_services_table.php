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
                ->nullable()
                ->constrained();

            $table->string('state_id')
                ->references('id')
                ->on('states')
                ->nullable();


            $table->string('city_id')
                ->references('id')
                ->on('cities')
                ->nullable();

            $table->string('locality_id')
                ->references('id')
                ->on('localities')
                ->nullable();

            $table->string('name')
                ->nullable();

            $table->text('description')
                ->nullable();

            $table->jsonb('features')
                ->nullable();

            $table->jsonb('photos')
                ->nullable();

            $table->string('address')
                ->nullable();

            $table->decimal('price', 8, 2)
                ->nullable();

            $table->enum('status', config('product.status'))
                ->default(STATUS_INCOMPLETE);

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
