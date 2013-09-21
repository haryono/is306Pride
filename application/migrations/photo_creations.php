<?php

class Create_Photos_Table {    

	public function up()
    {
		Schema::create('photos', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('location');
			$table->string('description');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('photos');

    }

}