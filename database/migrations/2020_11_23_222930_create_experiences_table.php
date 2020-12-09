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

            $table->foreignId('user_id')->constrained();
            $table->foreignId('category_id')->constrained();

            $table->string('name')->nullable();
            $table->jsonb('location')->nullable();
            $table->text('todo')->nullable();
            $table->jsonb('toProvide')->nullable();
            $table->jsonb('toBring')->nullable();
            $table->string('photos')->nullable();

            $table->string('minimum_age')->nullable();

            $table->enum('skill_level', config('product.skill_levels'))
                ->nullable()
                ->default(config('product.skill_levels')[0]);

            $table->enum('activity_level', config('product.activity_levels'))
                ->nullable()
                ->default(config('product.activity_levels')[0]);

            $table->text('to_know')->nullable();

            $table->string('group_size')->nullable();
            $table->time('duration')->nullable();

            $table->time('starting')->nullable();

            $table->decimal('price')->nullable();

            $table->boolean('private_group')->default(false);
            $table->decimal('price_private_group')->nullable();

            $table->unsignedSmallInteger('reservationLimitTime')->default(0);

            $table->boolean('status')->default(false);
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
