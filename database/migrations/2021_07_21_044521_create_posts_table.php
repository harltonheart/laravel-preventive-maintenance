<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('computer_id');
            $table->string('mouse')->nullable();
            $table->string('kboard')->nullable();
            $table->string('monitor')->nullable();
            $table->string('cpu')->nullable();
            $table->string('avr_ups')->nullable();
            $table->string('printer')->nullable();
            $table->string('bargun')->nullable();
            // $table->string('glucometer')->nullable();
            $table->string('sysboot')->nullable();
            $table->string('os')->nullable();
            $table->string('antivirus')->nullable();
            $table->string('ms_office')->nullable();
            $table->string('his')->nullable();
            $table->string('mms')->nullable();
            $table->string('emr')->nullable();
            $table->string('queui_sys')->nullable();
            $table->string('weblis')->nullable();
            // $table->string('btl')->nullable();
            // $table->string('phic_ref')->nullable();
            // $table->string('jivex')->nullable();
            // $table->string('netsupport')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
