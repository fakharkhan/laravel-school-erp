<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayrollCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payroll_categories', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->float('percentage');
            $table->integer('payroll_category_id');
            $table->boolean('is_deduction');
            $table->boolean('status');
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
		Schema::drop('payroll_categories');
	}

}
