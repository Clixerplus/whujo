<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                  ->constrained();

            $table->foreignId('category_id')
                  ->constrained();

            $table->string('name')
                  ->nullable();

            $table->text('toDo')
                  ->nullable();

            $table->jsonb('toProvide')
                  ->nullable();

            $table->jsonb('toBring')
                  ->nullable();

            $table->string('photos')
                  ->nullable();

            $table->string('minimumAge')
                  ->nullable();

            $table->enum('skillLevel', config('product.skill_levels'))
                  ->nullable()
                  ->default(config('product.skill_levels')[0]);

            $table->enum('activityLevel', config('product.activity_levels'))
                  ->nullable()
                  ->default(config('product.activity_levels')[0]);

            $table->text('toKnow')
                  ->nullable();

            $table->string('groupSize')
                  ->nullable();

            $table->jsonb('duration')
                  ->nullable();

            $table->jsonb('starting')
                  ->nullable();

            $table->decimal('price')
                  ->nullable();

            $table->boolean('privateGroup')
                  ->default(false);

            $table->decimal('pricePrivateGroup')
                  ->nullable();

            $table->unsignedSmallInteger('reservationLimitTime')
                  ->default(0);

            $table->boolean('status')
                  ->default(false);

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
        Schema::dropIfExists('experiences');
    }
}
