<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThirdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thirds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('computer_id');
            $table->string('mouse_stats')->nullable();
            $table->string('kb_stats')->nullable();
            $table->string('monitor_stats')->nullable();
            $table->string('cpu_stats')->nullable();
            $table->string('avrups_stats')->nullable();
            $table->string('printer_stats')->nullable();
            $table->string('bargun_stats')->nullable();
            // $table->string('glucometer_stats')->nullable();
            $table->string('sysboot_stats')->nullable();
            $table->string('os_stats')->nullable();
            $table->string('avirus_stats')->nullable();
            $table->string('msoffice_stats')->nullable();
            $table->string('his_stats')->nullable();
            $table->string('mms_stats')->nullable();
            $table->string('emr_stats')->nullable();
            $table->string('queui_stats')->nullable();
            $table->string('weblis_stats')->nullable();
            // $table->string('btl_stats')->nullable();
            // $table->string('phicref_stats')->nullable();
            // $table->string('jivex_stats')->nullable();
            // $table->string('netsupport_stats')->nullable();
            $table->timestamps();

            $table->foreign('computer_id')->references('id')->on('computers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thirds');
    }
}
