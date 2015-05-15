<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('category', function(Blueprint $table)
        {
            $table->increments('category_id');
            $table->bigInteger('user_id');
            $table->bigInteger('category_parent');
            $table->bigInteger('category_order');
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
        Schema::drop('category');
	}

}
