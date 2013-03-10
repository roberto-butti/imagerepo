<?php

class Create_Photos {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photos', function($table) {
			$table->increments('id');
			$table->string('title', 128);
			$table->text('body');
			$table->string('url_image', 256);
			$table->integer('author_id');
			$table->timestamps();
		});

		DB::table('photos')->insert(array(
      'title'  => 'prova1',
      'body'  => 'Prova<br>prova con <b>html</b>',
      'url_image'  => 'https://www.google.it/images/srpr/logo4w.png',
      'author_id' => 1 
    ));
		DB::table('photos')->insert(array(
      'title'  => 'prova2',
      'body'  => 'Prova2<br>prova con <b>html</b>',
      'url_image'  => 'https://lh5.ggpht.com/qTjFRAkS4P-5Tfrr_ovb9CbpDcM2DQopnSMqZ_lzsWVLnK-2x649xbULVXma6ulLZido=w705',
      'author_id' => 1 
    ));

		
		//
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('photos');
		//
	}

}