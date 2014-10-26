<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivedExamScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('archived_exam_scores', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('student_id');
            $table->integer('exam_id');
            $table->decimal('marks',7,2);
            $table->integer('grading_level_id');
            $table->string('remarks');
            $table->boolean('is_failed');
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
		Schema::drop('archived_exam_scores');
	}

}
