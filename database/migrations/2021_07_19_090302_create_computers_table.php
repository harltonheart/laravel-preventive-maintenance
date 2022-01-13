<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('department_id');
            $table->string('pc_name');
            $table->string('location');
            $table->string('ip_add');
            $table->string('ip_settings');
            $table->string('mr_to')->nullable();
            $table->string('initial_cost')->nullable();
            $table->string('deploy_date')->nullable();
            $table->string('serial')->nullable();
            $table->integer('year');
            $table->unsignedInteger('active')->default(1); //0 inactive
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
        Schema::dropIfExists('computers');
    }
}
