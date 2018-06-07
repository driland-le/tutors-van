<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('classes', function (Blueprint $table) {
				$table->increments('id');
				$table->string('class_id', 150)->unique();
				$table->string('subject_id');
				$table->string('address');
				$table->string('salary');
				$table->string('time_of_week');
				$table->string('time_of_schedule');
				$table->string('requirement_for_tutor');
				$table->string('contact');
				$table->string('status');
				$table->text('opts_json');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('classes');
	}
}
