<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionalExamGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('additional_exam_groups', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->integer('batch_id');
            $table->string('exam_type');
            $table->boolean('is_published')->default('0');
            $table->boolean('result_published')->default('0');
            $table->string('students_list');
            $table->date('exam_date');
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
		Schema::drop('additional_exam_groups');
	}

}
