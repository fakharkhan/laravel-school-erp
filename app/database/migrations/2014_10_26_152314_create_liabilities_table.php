<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiabilitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('liabilities', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->integer('amount');
            $table->boolean('is_solved')->default('0');
            $table->softDeletes();
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
		Schema::drop('liabilities');
	}

}
