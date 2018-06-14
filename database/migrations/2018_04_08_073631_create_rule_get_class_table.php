<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuleGetClassTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('rule_get_class', function (Blueprint $table) {
				$table->increments('id');
				$table->string('title');
				$table->string('summary');
				$table->text('description');
				$table->text('opts_json')->nullable();
				$table->boolean('activate')->nullable()->default(false);
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('rule_get_class');
	}
}
