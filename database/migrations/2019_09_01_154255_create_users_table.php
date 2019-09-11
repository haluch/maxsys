<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191);
			$table->string('email', 191)->unique();
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password', 191);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->integer('is_admin')->nullable();
			$table->integer('is_active')->nullable();
			$table->string('endereco', 191)->nullable();
			$table->integer('numero')->nullable();
			$table->string('bairro', 191)->nullable();
			$table->string('cep', 191)->nullable();
			$table->string('tel_fixo', 191)->nullable();
			$table->string('tel_cel', 191)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
