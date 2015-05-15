<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDescriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('product_description', function(Blueprint $table)
        {
            $table->bigInteger('product_id');
            $table->bigInteger('language_id');
            $table->string('product_name',500);
            $table->longText('product_description');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('product_description');
	}

}
