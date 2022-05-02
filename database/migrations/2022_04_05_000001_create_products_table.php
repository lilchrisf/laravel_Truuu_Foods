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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cate_id')->constrained('category', 'id');
            $table->string('name');
            $table->text('small_description');
            $table->text('description');
            $table->text('original_price');
            $table->double('selling_price');
            $table->string('image');
            $table->text('qty');
            $table->string('tax');
            $table->tinyInteger('status');
            $table->tinyInteger('trending');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keyword');
            $table->timestamps();



            // Schema::create('products', function (Blueprint $table) {
            //     $table->id();
            //     $table->foreignId('cate_id')->constrained('category', 'id');
            //     $table->string('name');
            //     $table->text('small_description');
            //     $table->text('description');
            //     $table->text('original_price');
            //     $table->double('selling_price');
            //     $table->string('image');
            //     $table->text('qty');
            //     $table->string('tax');
            //     $table->tinyInteger('status');
            //     $table->tinyInteger('trending');
            //     $table->string('meta_title');
            //     $table->string('meta_description');
            //     $table->string('meta_keyword');
            //     $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
