<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateHospitalsTable extends Migration {

	public function up()
	{
		Schema::create('hospitals', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->integer('category_id');
			$table->integer('country_id');
			$table->integer('governrate_id');
			$table->integer('city_id');
		});
	}

	public function down()
	{
		Schema::drop('hospitals');
	}
}