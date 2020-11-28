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

            $table->string('name')->nullable();
            $table->jsonb('location')->nullable();
            $table->text('todo')->nullable();
            $table->text('to_provide')->nullable();
            $table->text('to_bring')->nullable();
            $table->string('photos')->nullable();

            $table->string('minimum_age')->nullable();
            $table->tinyInteger('skill_level')->nullable();
            $table->tinyInteger('activity_level')->nullable();

            $table->text('to_know')->nullable();

            $table->string('group_size')->nullable();
            $table->time('duration')->nullable();

            $table->time('starting')->nullable();

            $table->decimal('price')->nullable();

            $table->boolean('private_group')->default(false);
            $table->decimal('price_private_group')->nullable();

            $table->time('reservation_limit_time')->nullable();

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
