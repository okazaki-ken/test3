<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeightLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weight_logs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('weight');
            $table->integer('calories');
            $table->time('exercise_time');
            $table->text('exercise_content');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();

            // 外部キー制約（usersテーブルのidを参照）
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weight_logs');
    }
}
