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
        Schema::create('gases', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->enum('brand', ['k_gas','shell_gas','afrigas','progas','total_gas','lake_gas','sea_gas','dell_gas']);
            $table->string('price');
            $table->enum('type', ['refill','new_cylinder',]);
            $table->enum('size', ['6kg','13kg','50kg']);
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
        Schema::dropIfExists('gases');
    }
};
