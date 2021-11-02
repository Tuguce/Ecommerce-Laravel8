<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**/
        Schema::create('categories', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->Integer('parent_id')->default(0);
            $table->String('title',200);
            $table->String('description')->nullable();
            $table->String('keywords')->nullable();
            $table->String('status',10)->nullable();
            $table->String('image',100)->nullable();
            $table->String('slug',100)->nullable();

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
        Schema::dropIfExists('categories');
    }
}
