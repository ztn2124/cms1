<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration {


	public function up()
	{
		 Schema::create('article', function($t) 
		   {
                $t->increments('id');
                $t->string('articletitle', 30);
                $t->string('articlebody', 200);
                $t->timestamps();
            });
	}

	public function down()
	{
		Schema::drop('article');//
	}

}
