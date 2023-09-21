<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMerchantsTable extends Migration {

	public function up()
	{
		Schema::create('merchants', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('owner_name');
			$table->string('shop_name');
			$table->string('phone');
			$table->string('email')->unique();
			$table->text('adress');
			$table->string('password');
		});
	}

	public function down()
	{
		Schema::drop('merchants');
	}
}
