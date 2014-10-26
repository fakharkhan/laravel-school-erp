<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentPreviousDatasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_previous_datas', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('student_id');
            $table->string('institution');
            $table->string('year');
            $table->string('course');
            $table->string('total_mark');
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
		Schema::drop('student_previous_datas');
	}

}
