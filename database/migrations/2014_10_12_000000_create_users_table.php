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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('code')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('is_customer')->default('1');
            $table->boolean('is_admin')->default('0');
            $table->boolean('is_editor')->default('0');
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
        Schema::dropIfExists('users');
    }
};
