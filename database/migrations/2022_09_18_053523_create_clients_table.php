<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('email');
			$table->string('password');
			$table->string('phone');
			$table->string('api_token');
			$table->boolean('status');
			$table->integer('pin_code');
			$table->integer('city_id');
			$table->integer('governrate_id');
			$table->integer('country_id');
			$table->date('date_of_birth');
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}