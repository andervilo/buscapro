<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicoEspecialidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servico_especialidade', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('servico_id')->index('servicoidx');
			$table->integer('especialidade_id')->index('especidx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servico_especialidade');
	}

}
