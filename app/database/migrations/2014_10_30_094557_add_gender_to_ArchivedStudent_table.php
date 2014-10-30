<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGenderToArchivedStudentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('archived_students', function(Blueprint $table)
		{
            $table->boolean('gender')->after('last_name');
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
            $table->dropColumn('gender');
		});
	}

}
