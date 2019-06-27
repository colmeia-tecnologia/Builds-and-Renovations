<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioImagesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portfolio_images', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('portfolio_id')->unsigned();
            $table->string('image');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->integer('order');
            $table->timestamps();

            $table->foreign('portfolio_id')
                ->references('id')
                ->on('portfolios')
                ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('portfolio_images');
	}

}
