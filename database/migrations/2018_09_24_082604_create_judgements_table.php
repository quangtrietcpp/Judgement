<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJudgementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judgements', function (Blueprint $table) {
            $table->increments('judgement_id');
            $table->string('judgement_no', 30);
            $table->integer('type');
            $table->date('date_created');
            $table->string('court');
            $table->text('judicial_council');
            $table->text('secretary');
            $table->text('prosecutor');
            $table->text('opening');
            $table->text('happenings');
            $table->mediumText('identification');
            $table->mediumText('decision');
            $table->text('recipient');
            $table->string('signature', 12);
            $table->foreign('signature')->references('judge_id')->on('judges');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('judgements');
    }
}
