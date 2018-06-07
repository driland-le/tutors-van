<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterTutorsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('register_tutors', function (Blueprint $table) {
				$table->increments('id');
				$table->string('tutor_name');
				$table->string('tutor_email');
				$table->string('tutor_phone');
				$table->string('tutors_address');
				// $table->string('type');
				$table->integer('class_type_id');
				$table->string('subject');
				$table->integer('student_numbers');
				$table->string('salary_expect');
				$table->string('time');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('register_tutors');
	}
}
