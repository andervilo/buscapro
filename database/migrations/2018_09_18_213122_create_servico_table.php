<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servico', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->index('useridx');
			$table->integer('profissao_id')->index('profissaoidx');
			$table->text('descricao', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servico');
	}

}
