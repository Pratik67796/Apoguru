<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyQuestionAnwserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasColumn('interactive_qestion', 'interactive_qestion')){
            Schema::table('interactive_qestion', function (Blueprint $table) {
                $table->dropColumn('interactive_qestion');
            });
                
            Schema::table('interactive_qestion', function (Blueprint $table) {
                $table->text('interactive_qestion')->nullable();
            });
        }

        if(Schema::hasColumn('interactive_answers', 'interactive_answer')){
            Schema::table('interactive_answers', function (Blueprint $table) {
                $table->dropColumn('interactive_answer');
            });
                
            Schema::table('interactive_answers', function (Blueprint $table) {
                $table->text('interactive_answer')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
