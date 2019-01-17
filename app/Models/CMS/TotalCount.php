<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Model;

class TotalCount extends Model
{
        protected $guarded = [];
   

   public function blog()
   {
   	return $this->belongsTo('App\Models\CMS\Blog','blog_id');
   }
}
