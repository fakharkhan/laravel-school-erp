<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('employee_category_id');
            $table->string('employee_number');//->unique();
            $table->date('joining_date');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->boolean('gender');
            $table->string('job_title');
            $table->integer('employee_position_id');
            $table->integer('employee_department_id');
            $table->integer('reporting_manager_id');
            $table->integer('employee_grade_id');
            $table->string('qualification');
            $table->text('experience_detail');
            $table->integer('experience_year');
            $table->integer('experience_month');
            $table->boolean('status');
            $table->string('status_description');
            $table->date('date_of_birth');
            $table->string('marital_status');
            $table->integer('children_count');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('husband_name');
            $table->string('blood_group');
            $table->integer('nationality_id');
            $table->string('home_address_line1');
            $table->string('home_address_line2');
            $table->string('home_city');
            $table->string('home_state');
            $table->integer('home_country_id');
            $table->string('home_pin_code');
            $table->string('office_address_line1');
            $table->string('office_address_line2');
            $table->string('office_city');
            $table->string('office_state');
            $table->integer('office_country_id');
            $table->string('office_pin_code');
            $table->string('office_phone1');
            $table->string('office_phone2');
            $table->string('mobile_phone');
            $table->string('home_phone');
            $table->string('email');
            $table->string('fax');
            $table->string('photo_filename');
            $table->string('photo_content_type');
            $table->binary('photo_data');
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
		Schema::drop('employees');
	}

}
