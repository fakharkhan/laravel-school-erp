<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteGerToArchivedEmployeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('archived_employees', function(Blueprint $table)
		{
            $table->dropColumn('g});er');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('archived_employees', function(Blueprint $table)
		{
			//
		});
	}

}
