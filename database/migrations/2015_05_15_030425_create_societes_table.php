<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocietesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('societes', function(Blueprint $table)
		{
			$table->increments('id_clt');
			$table->string('nom_clt');
			$table->string('comment_clt');
			$table->Integer('effectif_clt');
			$table->Integer('ca_clt');
			$table->string('num_tva_clt');
			$table->string('url_clt');
			$table->string('tel_siege_clt');
			$table->string('fax_siege_clt');
			$table->string('email_siege_clt');
			$table->string('ville_siege_clt');
			$table->string('etat_siege_clt');
			$table->string('pays_clt');
			$table->string('adresse_siege_clt');
			$table->string('tel_usine');
			$table->string('fax_usine');
			$table->string('rue_usine');
			$table->string('etat_usine');
			$table->string('pays_usine');
			$table->string('bank_account_clt');
			$table->string('activite_clt');
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
		Schema::drop('societes');
	}

}
