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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('detail')->nullable();
            $table->float('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('minquantity')->nullable();
            $table->integer('tax')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->integer('rooms')->nullable();
            $table->integer('baths')->nullable();
            $table->string('heating')->nullable();
            $table->integer('garage')->nullable();
            $table->integer('area')->nullable();
            $table->string('furnished')->nullable();
            $table->integer('floors')->nullable();
            $table->integer('age')->nullable();
            $table->integer('dues')->nullable();
            $table->string('status',6)->default('False');
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
        Schema::dropIfExists('homes');
    }
};
