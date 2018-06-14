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
				$table->integer('level_id')->nullable();
				$table->integer('subject_id')->nullable();
				$table->string('tutor_name');
				$table->string('tutor_email');
				$table->string('tutor_phone');
				$table->string('tutors_address')->nullable();
				$table->integer('student_numbers')->nullable();
				$table->string('salary_expect')->nullable();
				$table->string('requirement')->nullable();
				$table->string('status')->nullable()->default('');
				$table->text('note')->nullable();
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
