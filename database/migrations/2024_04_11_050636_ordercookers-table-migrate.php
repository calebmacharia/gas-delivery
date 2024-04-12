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
        Schema::create('ordercookers', function (Blueprint $table) {
            $table->id();
            $table->enum('brand',['amaze','armaco','ariston','beko','simfer','samsung']);
            $table->enum('type',['electric cooker','gas cooker','oven',]);
            $table->enum('size',['2 burner','3 burner','4 burner']);
            $table->string('price');
            $table->string('image');
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
        //
    }
};
