<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->increments('product_id');
            $table->string('image');
            $table->bigInteger('quantity');
            $table->float('price');
            $table->float('weight');
            $table->float('length');
            $table->float('width');
            $table->float('height');
            $table->bigInteger('minimum');
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
		Schema::drop('products');
	}

}
