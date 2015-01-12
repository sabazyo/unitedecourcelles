<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sections', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('shortname');
			$table->string('color');
			$table->boolean('active');

			$table->timestamps();
			$table->unique('shortname');
			$table->unique('name');
		});

		Sections::create(['name' => 'L\'équipe d\'unité', 'shortname' => 'unite', 'color' => '#FFFFFF', 'active' => 1]);
		Sections::create(['name' => 'Les baladins', 'shortname' => 'baladin', 'color' => '#000000', 'active' => 0]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sections');
	}

}
