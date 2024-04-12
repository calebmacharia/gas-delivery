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
        // if( Schema::hasTable('billing'))
        Schema::create('billings', function (Blueprint $table) {
            // $table->id();

            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
           // $table->json('delivery_location')->nullable()->default(json_encode(['default_value'=>'']));
            $table->string('delivery_location')->nullable();
            $table->string('street_name')->nullable();
            $table->string('house_number')->nullable();

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
        Schema::dropIfExists('billings');
    }
};
