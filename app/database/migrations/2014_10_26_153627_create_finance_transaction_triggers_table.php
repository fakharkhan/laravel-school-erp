<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceTransactionTriggersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('finance_transaction_triggers', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('finance_category_id');
            $table->decimal('percentage',8,2);
            $table->string('title');
            $table->string('description');
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
		Schema::drop('finance_transaction_triggers');
	}

}
