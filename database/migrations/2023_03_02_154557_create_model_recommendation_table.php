<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelRecommendationTable extends Migration
{
    public function up()
    {
        Schema::create('laravel_model_recommendation_table', function (Blueprint $table) {
            $table->id();

            $table->string('recommendation_name', 100)->default('default');
            $table->morphs('source');
            $table->morphs('target');
            $table->unsignedInteger('order_column')->default(0);

            $table->timestamps();

            $table->index(['source_type', 'source_id', 'recommendation_name'], 'source_index');
            $table->index('order_column', 'order_column_index');
        });
    }

    public function down()
    {
        Schema::drop('laravel_model_recommendation_table');
    }
}
