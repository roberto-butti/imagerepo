<?php

class Create_Photos {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table) {
			$table->increments('id');
			$table->string('title', 128);
			$table->text('body');
			$table->string('url_image', 256);
			$table->integer('author_id');
			$table->timestamps();
		});
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