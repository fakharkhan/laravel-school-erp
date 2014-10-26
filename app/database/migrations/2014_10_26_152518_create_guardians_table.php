<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardiansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guardians', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('ward_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('relation');
            $table->string('email');
            $table->string('office_phone1');
            $table->string('office_phone2');
            $table->string('mobile_phone');
            $table->string('office_address_line1');
            $table->string('office_address_line2');
            $table->string('city');
            $table->string('state');
            $table->integer('country_id');
            $table->date('dob');
            $table->string('occupation');
            $table->string('income');
            $table->string('education');
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
		Schema::drop('guardians');
	}

}
