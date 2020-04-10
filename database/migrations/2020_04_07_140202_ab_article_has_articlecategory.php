<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AbArticleHasArticlecategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_article_has_articlecategory', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('ab_articlecategory_id');
            $table->unsignedInteger('ab_article_id');

            $table->unique('ab_articlecategory_id', 'ab_article_id ');

            $table->foreign('ab_articlecategory_id')->references('id')->on('ab_articlecategory');
            $table->foreign('ab_article_id')->references('id')->on('ab_article');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ab_article_has_articlecategory');
    }
}
