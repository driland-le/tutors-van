<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Introduce extends Model {

	use Notifiable;
	use Sluggable;

	protected $table = "introduces";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title', 'summary', 'description', 'opts_json',
	];

	/**
	 * Return the sluggable configuration array for this model.
	 *
	 * @return array
	 */
	public function sluggable() {
		return [
			'slug'    => [
				'source' => 'title',
			],
		];
	}

	public function __construct() {
		$this->introduce = $this->all();
	}

}
