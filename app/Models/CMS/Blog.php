<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {

	protected $guarded = [];

	public function category() {
		return $this->belongsTo('App\Models\CMS\CmsCategory');
	}

	public function tags() {

		return $this->belongsToMany('App\Models\CMS\CmsTag', 'blog_tag', 'blog_id', 'tag_id');
	}
	public function user() {
		return $this->belongsTo('App\Models\Access\User\User');

	}

}
