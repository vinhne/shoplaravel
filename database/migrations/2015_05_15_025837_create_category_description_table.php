<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryDescriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('category_description', function(Blueprint $table)
        {
            $table->bigInteger('category_id');
            $table->bigInteger('language_id');
            $table->string('name');
            $table->mediumText('description');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('category_description');
	}

}
