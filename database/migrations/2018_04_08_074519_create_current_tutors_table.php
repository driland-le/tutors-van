<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentTutorsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('current_tutors', function (Blueprint $table) {
				$table->increments('id');
				$table->string('first_name')->nullable();
				$table->string('last_name')->nullable();
				$table->string('full_name');
				$table->string('avatar')->nullable();
				$table->string('address')->nullable();
				$table->string('salary')->nullable();
				$table->string('time_of_week')->nullable();
				$table->string('time_of_schedule')->nullable();
				$table->string('requirement_for_tutor')->nullable();
				$table->string('contact')->nullable();
				$table->string('note')->nullable();
				$table->string('status')->nullable();
				$table->text('opts_json')->nullable();
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('current_tutors');
	}
}
