<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToDocentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('docentes', function(Blueprint $table)
		{
                    $table->foreign('departamento_id')->references('id')->on('departamento');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('docentes', function(Blueprint $table)
		{
                    $table->dropForeign('escuelas_departamento_id_foreign');
		});
	}

}
