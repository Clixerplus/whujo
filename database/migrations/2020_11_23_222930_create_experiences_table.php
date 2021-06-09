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

            $table->text('description')
                ->nullable();

            $table->jsonb('toProvide')
                ->nullable();

            $table->jsonb('toBring')
                ->nullable();

            $table->jsonb('photos')
                ->nullable();

            $table->tinyInteger('minimumAge')
                ->nullable();

            $table->enum('skillLevel', config('product.skill_levels'))
                ->default('SKILL_LVL_BEGINNER');

            $table->enum('activityLevel', config('product.activity_levels'))
                ->default('ACTIVITY_LVL_LIGHT');

            $table->text('toKnow')
                ->nullable();

            $table->tinyInteger('groupSize')
                ->nullable();

            $table->jsonb('duration')
                ->nullable();

            $table->jsonb('starting')
                ->nullable();

            $table->decimal('price')
                ->nullable();

            $table->boolean('privateGroup')
                ->nullable();

            $table->decimal('privateGroupPrice')
                ->nullable();

            $table->unsignedSmallInteger('reservationLimitTime')
                ->nullable();

            $table->enum('status', config('product.status'))
                ->default('STATUS_INCOMPLETE');

            $table->string('modality')
                ->nullable();

            $table->boolean('shareACoffee')->default(false);

            $table->timestamps();

            $table->string('type');
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
