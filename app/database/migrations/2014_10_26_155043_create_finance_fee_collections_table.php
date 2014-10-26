<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceFeeCollectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('finance_fee_collections', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('due_date');
            $table->integer('fee_category_id');
            $table->integer('batch_id');
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
		Schema::drop('finance_fee_collections');
	}

}
