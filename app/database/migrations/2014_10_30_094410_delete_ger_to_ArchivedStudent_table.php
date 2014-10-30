<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteGerToArchivedStudentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('archived_students', function(Blueprint $table)
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
		Schema::table('archived_students', function(Blueprint $table)
		{
			//
		});
	}

}
