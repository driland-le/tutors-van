<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('contacts', function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 190)->nullable();
				$table->string('address', 190)->nullable();
				$table->string('phone', 190)->nullable();
				$table->string('email', 190)->nullable();
				$table->text('content')->nullable();
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('contacts');
	}
}
