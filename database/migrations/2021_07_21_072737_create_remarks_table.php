<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remarks', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('computer_id');
            $table->date('date_findings')->nullable();
            $table->string('findings')->nullable();
            $table->string('recommended')->nullable();
            $table->string('ticket')->nullable();
            // $table->string('remarktitle')->nullable();
            // $table->longText('remarkbody')->nullable();
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
        Schema::dropIfExists('remarks');
    }
}
