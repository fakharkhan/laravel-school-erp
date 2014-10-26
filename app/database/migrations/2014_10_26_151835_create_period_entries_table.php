<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('period_entries', function(Blueprint $table)
		{
			$table->increments('id');
            $table->date('month_date');
            $table->integer('batch_id');
            $table->integer('subject_id');
            $table->integer('class_timing_id');
            $table->integer('employee_id');
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
		Schema::drop('period_entries');
	}

}
