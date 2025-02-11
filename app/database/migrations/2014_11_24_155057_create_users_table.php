<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

	Schema::create('users', function($table) {

	$table->increments('id');
	$table->string('username')->unique();
    $table->string('email')->unique();
    $table->string('remember_token',100); 
    $table->string('password');
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
		Schema::drop('users');
	}

}
