<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentPreviousSubjectMarksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_previous_subject_marks', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('student_id');
            $table->string('subject');
            $table->string('mark');
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
		Schema::drop('student_previous_subject_marks');
	}

}
