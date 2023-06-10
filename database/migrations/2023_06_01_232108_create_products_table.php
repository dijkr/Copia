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
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('subcategory_id');
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            $table->unsignedBigInteger('subsubcategory_id');
            $table->foreign('subsubcategory_id')->references('id')->on('subsubcategories');
            $table->string('EAN');
            $table->string('slug');
            $table->string('Title');
            $table->string('Brand');
            $table->string('Shortdescription');
            $table->string('Fulldescription');
            $table->string('Image');
            $table->string('Weight');
            $table->float('Price');
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
