<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTimingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('class_timings', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('batch_id');
            $table->string('name');
            $table->time('start_time');
            $table->time('end_time');
            $table->boolean('is_break');
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
		Schema::drop('class_timings');
	}

}
