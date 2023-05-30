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
            $table->timestamps();
            $table->string('EAN');
            $table->string('Title');
            $table->string('Brand');
            $table->string('Shortdescription');
            $table->string('Fulldescription');
            $table->string('Image');
            $table->string('Weight');
            $table->float('Price');
            $table->string('Category');
            $table->string('Subcategory');
            $table->string('Subsubcategory');
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
