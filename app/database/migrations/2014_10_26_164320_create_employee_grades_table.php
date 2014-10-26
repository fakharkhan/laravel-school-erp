<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeGradesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee_grades', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->integer('priority');
            $table->boolean('status');
            $table->integer('max_hours_day');
            $table->integer('max_hours_week');
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
		Schema::drop('employee_grades');
	}

}
