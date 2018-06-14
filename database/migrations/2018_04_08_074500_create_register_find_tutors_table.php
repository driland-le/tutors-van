<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterFindTutorsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('register_find_tutors', function (Blueprint $table) {
				$table->increments('id');
				$table->integer('level_id');
				$table->string('gender');
				$table->integer('email');
				$table->text('schedule');
				$table->string('subject_registry');
				$table->string('address');
				$table->integer('phone');
				$table->string('contact');
				$table->string('status');
				$table->boolean('activate');

				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('register_find_tutors');
	}
}
