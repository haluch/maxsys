<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaturamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faturamento', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->dateTime('vencimento');
			$table->string('observacoes', 191);
			$table->integer('servico_id')->unsigned()->index('faturamento_servico_id_foreign');
			$table->integer('produto_id')->unsigned()->index('faturamento_produto_id_foreign');
			$table->integer('user_id')->unsigned()->index('faturamento_user_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('faturamento');
	}

}
