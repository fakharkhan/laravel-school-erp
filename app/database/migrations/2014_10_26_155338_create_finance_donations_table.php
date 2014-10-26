<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceDonationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('finance_donations', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('donor');
            $table->string('description');
            $table->decimal('amount',12,8);
            $table->integer('transaction_id');
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
		Schema::drop('finance_donations');
	}

}
