<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthlyPayslipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('monthly_payslips', function(Blueprint $table)
		{
			$table->increments('id');
            $table->date('salary_date');
            $table->integer('employee_id');
            $table->integer('payroll_category_id');
            $table->string('amount');
            $table->boolean('is_approved')->default('0');
            $table->integer('approver_id');
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
		Schema::drop('monthly_payslips');
	}

}
