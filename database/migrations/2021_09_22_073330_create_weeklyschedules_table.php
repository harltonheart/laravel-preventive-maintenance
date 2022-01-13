<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeklyschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeklyschedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('monthlyschedule_id');
            $table->string('department_name');
            $table->string('weekly');
            $table->integer('partial')->nullable();
            $table->integer('done')->nullable();
            $table->integer('actual')->nullable();
            $table->timestamps();

            $table->foreign('monthlyschedule_id')->references('id')->on('monthlyschedules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weeklyschedules');
    }
}
