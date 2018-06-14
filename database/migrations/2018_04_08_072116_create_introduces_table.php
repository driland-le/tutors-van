<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntroducesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('introduces', function (Blueprint $table) {
				$table->increments('id');
				$table->string('title');
				$table->string('summary');
				$table->text('description');
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
		Schema::dropIfExists('introduces');
	}
}
