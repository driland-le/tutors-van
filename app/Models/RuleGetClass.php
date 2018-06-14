<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RuleGetClass extends Model {

	protected $table = "rule_get_class";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title', 'summary', 'description', 'opts_json',
	];
}
