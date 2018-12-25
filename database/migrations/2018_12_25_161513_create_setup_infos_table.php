<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateSetupInfosTable.
 */
class CreateSetupInfosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('setup_infos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('key')->nullable();
            $table->text('value');
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
		Schema::drop('setup_infos');
	}
}
