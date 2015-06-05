<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
			$table->increments('id_contact');
			$table->string('genre_contact');
			$table->string('nom_contact');
			$table->string('prenoms_contact');
			$table->date('ddn_contact');
			$table->string('fonction_contact');
			$table->string('service_contact');
			$table->string('description_contact');
			$table->string('adresse_contact');
			$table->string('email_contact');
			$table->integer('tel_contact');
			$table->integer('id_societe');
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
		Schema::drop('contacts');
	}

}
