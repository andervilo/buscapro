<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEspecialidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('especialidade', function(Blueprint $table)
		{
			$table->foreign('profissao_id', 'FK_profissao_espec')->references('id')->on('profissao')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('especialidade', function(Blueprint $table)
		{
			$table->dropForeign('FK_profissao_espec');
		});
	}

}
