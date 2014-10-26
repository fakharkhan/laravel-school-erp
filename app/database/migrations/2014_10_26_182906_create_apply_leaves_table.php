<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyLeavesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apply_leaves', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('employee_id');
            $table->integer('employee_leave_types_id');
            $table->boolean('is_half_day');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('reason');
            $table->boolean('approved')->default('0');
            $table->boolean('viewed_by_manager')->default('0');
            $table->string('manager_remark');
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
		Schema::drop('apply_leaves');
	}

}
