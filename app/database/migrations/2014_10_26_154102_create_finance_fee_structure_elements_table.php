<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceFeeStructureElementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('finance_fee_structure_elements', function(Blueprint $table)
		{
			$table->increments('id');
            $table->decimal('amount',8,2);
            $table->string('label');
            $table->integer('batch_id');
            $table->integer('student_category_id');
            $table->integer('student_id');
            $table->integer('parent_id');
            $table->integer('fee_collection_id');
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
		Schema::drop('finance_fee_structure_elements');
	}

}
