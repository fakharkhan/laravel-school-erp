<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeLeaveTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee_leave_types', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('code'); //unique
            $table->boolean('status');
            $table->string('max_leave_count');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employee_leave_types');
	}

}
