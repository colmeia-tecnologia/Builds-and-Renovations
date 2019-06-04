<?php

use App\Http\Controllers\Util\Database\PermissionController;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEbooksTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ebooks', function(Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('title');
            $table->text('description');
            $table->integer('landing_page_id')->unsigned();
            $table->boolean('active')->default('1');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('landing_page_id')
                    ->references('id')
                    ->on('landing_pages');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ebooks');
	}

}
