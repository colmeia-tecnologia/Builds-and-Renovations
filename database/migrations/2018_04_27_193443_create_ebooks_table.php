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

		$this->addPermission();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$this->deletePermissions();
		Schema::drop('ebooks');
	}

	/**
	 * Add landing pages permissions
	 * 
	 * @return void
	 */
	private function addPermission()
	{
		PermissionController::addPermissions(['ebooks' => 'e-books']);
	}

	/**
	 * Remove landing pages permissions
	 * 
	 * @return void
	 */
	private function deletePermissions()
	{
		PermissionController::deletePermissions('ebooks');
	}

}
