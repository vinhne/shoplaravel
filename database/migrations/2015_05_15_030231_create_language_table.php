<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('language', function(Blueprint $table)
        {
            $table->increments('language_id');
            $table->string('name',150);
            $table->string('code',20);
            $table->string('image');
            $table->string('directory');
            $table->string('filename');
            $table->bigInteger('sort_order');
            $table->bigInteger('status');
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
        Schema::drop('language');
	}

}
