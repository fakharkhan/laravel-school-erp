<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeAttendancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee_attendances', function(Blueprint $table)
		{
			$table->increments('id');
            $table->date('attendance_date');
            $table->integer('employee_id');
            $table->integer('employee_leave_type_id');
            $table->string('reason');
            $table->boolean('is_half_day');
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
		Schema::drop('employee_attendances');
	}

}
