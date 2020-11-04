<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsAstronsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_astrons', function (Blueprint $table) {
            $table->id();
            $table->string('headline', 500);
            $table->string('paragraph_1', 1000);
            $table->string('paragraph_2', 1000)->nullable();
            $table->string('paragraph_3', 1000)->nullable();
            $table->integer('isExported')->default(0);
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
        Schema::dropIfExists('news_astrons');
    }
}
