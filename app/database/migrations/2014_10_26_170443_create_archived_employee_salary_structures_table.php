<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivedEmployeeSalaryStructuresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('archived_employee_salary_structures', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('employee_id');
            $table->integer('payroll_category_id');
            $table->string('amount');
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
		Schema::drop('archived_employee_salary_structures');
	}

}
