<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Http\Controllers\Util\Database\PermissionController;

class CreateLandingPagesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('landing_pages', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('image');
            $table->text('description')->nullable();
            $table->text('text')->nullable();
            $table->string('form_title')->nullable();
            $table->text('form')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
		Schema::drop('landing_pages');
	}

	/**
	 * Add landing pages permissions
	 * 
	 * @return void
	 */
	private function addPermission()
	{
		PermissionController::addPermissions(['landing_pages' => 'landing pages']);
	}

	/**
	 * Remove landing pages permissions
	 * 
	 * @return void
	 */
	private function deletePermissions()
	{
		PermissionController::deletePermissions('landing_pages');
	}
}
