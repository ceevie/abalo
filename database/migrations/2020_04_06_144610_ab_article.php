<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AbArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_article', function (Blueprint $table) {
            $table->id();
            $table->string('ab_name', 80)->nullable($value = false);
            $table->unsignedInteger('ab_price');
            $table->string('ab_description');
            $table->unsignedInteger('ab_creator_id');
            $table->timestamp('ab_createdate', 0);

            $table->foreign('ab_creator_id')->references('id')->on('ab_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ab_article');
    }
}
