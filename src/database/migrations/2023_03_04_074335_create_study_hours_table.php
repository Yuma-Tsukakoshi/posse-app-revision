<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_hours', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->float('hours');
            $table->timestamps();
            // ↑作成日時
            // 更新日時も作成する
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_hours');
    }
};
