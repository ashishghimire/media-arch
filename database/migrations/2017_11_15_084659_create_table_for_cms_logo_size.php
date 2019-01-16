<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableForCmsLogoSize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_logo_sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('logo_size');
            $table->integer('logo_id')->unsigned();
            $table->foreign('logo_id')->references('id')->on('cms_header')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('cms_logo_sizes');

    }
}
