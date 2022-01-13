<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('department_id');
            $table->string('type');
            $table->string('brand_name')->nullable();
            $table->string('device_name')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('port')->nullable();
            $table->string('source')->nullable();
            $table->string('serial')->nullable();
            $table->string('location')->nullable();
            $table->unsignedInteger('active')->default(1); //0 inactive (status)
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
        Schema::dropIfExists('devices');
    }
}
