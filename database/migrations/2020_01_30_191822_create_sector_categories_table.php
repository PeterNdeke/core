<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectorCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sector_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sector_name');
            $table->string('category_name');
            $table->string('description');
            $table->decimal('min_amount');
            $table->decimal('max_amount');
            $table->integer('duration');
            $table->integer('percentage');
            $table->string('image_url');
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
        Schema::dropIfExists('sector_categories');
    }
}
