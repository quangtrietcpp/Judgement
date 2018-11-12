<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefendantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defendants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judgement_id');
            $table->foreign('judgement_id')->references('judgement_id')->on('judgements');
            $table->string('name');
            $table->integer('gender');
            $table->text('crime');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('occupation');
            $table->string('study_level');
            $table->string('ethnics');
            $table->string('religion');
            $table->text('previous_conviction');
            $table->text('antecedent');
            $table->date('captured_on')->nullable();
            $table->boolean('present');
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
        Schema::dropIfExists('defendants');
    }
}
