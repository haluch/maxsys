<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFaturamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('faturamento', function(Blueprint $table)
		{
			$table->foreign('produto_id')->references('id')->on('produtos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('servico_id')->references('id')->on('servicos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('faturamento', function(Blueprint $table)
		{
			$table->dropForeign('faturamento_produto_id_foreign');
			$table->dropForeign('faturamento_servico_id_foreign');
			$table->dropForeign('faturamento_user_id_foreign');
		});
	}

}
