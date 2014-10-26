<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualPayslipCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('individual_payslip_categories', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('employee_id');
            $table->date('salary_date');
            $table->string('name');
            $table->string('amount');
            $table->boolean('is_deduction');
            $table->boolean('include_every_month');
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
		Schema::drop('individual_payslip_categories');
	}

}
