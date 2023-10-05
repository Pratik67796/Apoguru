<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->string('last_name')->nullable();
          $table->string('country_code')->nullable();
          $table->string('avatar')->nullable();
          $table->string('phone')->nullable()->unique();
          $table->string('qualification')->nullable();
          $table->string('workplace')->nullable();
          $table->string('country')->nullable();
          $table->string('teaching_experience')->nullable();
          $table->text('summary')->nullable();
          $table->string('credit')->nullable();
          $table->string('Facebook')->nullable();
          $table->string('Instagram')->nullable();
          $table->string('LinkedIn')->nullable();
          $table->string('Telegram')->nullable();
          $table->string('Tiktok')->nullable();
          $table->string('Twitter')->nullable();
          $table->string('YouTube')->nullable();
          $table->string('extra_feild')->nullable();
          $table->string('verification_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
