<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('admission_no');
            $table->string('class_roll_no');
            $table->date('admission_date');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->integer('batch_id');
            $table->date('date_of_birth');
            $table->string('g});er');
            $table->string('blood_group');
            $table->string('birth_place');
            $table->integer('nationality_id');
            $table->string('language');
            $table->string('religion');
            $table->integer('student_category_id');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('city');
            $table->string('state');
            $table->string('pin_code');
            $table->integer('country_id');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('email');
            $table->integer('immediate_contact_id');
            $table->boolean('is_sms_enabled')->default('1');
            $table->string('photo_filename');
            $table->string('photo_content_type');
            $table->binary('photo_data');           //limit => 16777215
            $table->string('status_description');
            $table->boolean('is_active')->default('1');
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
		Schema::drop('students');
	}

}
