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
				$table->integer('subject_id');
				$table->integer('group_level_id');
				$table->string('address');
				$table->string('salary');
				$table->string('time_of_week');
				$table->string('time_of_schedule');
				$table->string('requirement_for_tutor');
				$table->string('contact');
				$table->string('status');
				$table->boolean('activate')->nullable()->default(false);
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
		Schema::dropIfExists('classes');
	}
}
