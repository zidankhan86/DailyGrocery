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
            $table->string('product_name');
            // $table->foreignId('category_id')->references('id')->on('categories')->restrictOnDelete();
            // $table->foreignId('category_id')->constrained('categories')->restrictOnDelete();
            $table->foreignId('category_id');
            $table->string('shop_name');
            $table->string('image')->nullable();
            $table->string('price');
            $table->string('quantity');
            $table->string('details');
            $table->string('status');
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
        Schema::dropIfExists('products');
    }
};
