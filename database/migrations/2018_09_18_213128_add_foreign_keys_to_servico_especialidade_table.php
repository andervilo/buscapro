<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToServicoEspecialidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('servico_especialidade', function(Blueprint $table)
		{
			$table->foreign('especialidade_id', 'FK_serv_espec1')->references('id')->on('especialidade')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('servico_id', 'FK_serv_espec2')->references('id')->on('servico')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('servico_especialidade', function(Blueprint $table)
		{
			$table->dropForeign('FK_serv_espec1');
			$table->dropForeign('FK_serv_espec2');
		});
	}

}
