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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders', 'id');
            $table->foreignId('prod_id');
            $table->string('order_model_id');
            $table->string('qty');
            $table->string('price');
            $table->timestamps();
        });

        // Schema::create('order_items', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('order_id')->constrained('orders', 'id');
        //     $table->foreignId('prod_id')->constrained('carts', 'id');
        //     $table->string('qty');
        //     $table->string('price');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};
