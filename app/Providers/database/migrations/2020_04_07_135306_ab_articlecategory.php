<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AbArticlecategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_articlecategory', function (Blueprint $table) {
            $table->id();
            $table->string('ab_name', 1000)->nullable();
            $table->BigInteger('ab_parent')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ab_articlecategory');
    }
}
