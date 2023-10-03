<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration {

	public function up()
	{
		Schema::create('merchants', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('name');
			$table->string('shop_name');
			$table->string('subdomain');
			$table->string('phone');
			$table->string('email')->unique();
			$table->text('address')->nullable();
			$table->string('password');
		});
	}

	public function down()
	{
		Schema::drop('merchants');
	}
}
