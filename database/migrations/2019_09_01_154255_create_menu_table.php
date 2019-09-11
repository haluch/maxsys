<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menu', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('menu', 191)->nullable();
			$table->string('item_menu', 191)->nullable();
			$table->string('is_item_menu', 191)->nullable();
			$table->string('icon_menu', 191)->nullable()->default('si si-bulb');
			$table->string('link_item_menu', 191)->nullable();
			$table->string('ativo', 191)->nullable();
			$table->integer('is_admin')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menu');
	}

}
