<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Model;

class CmsTag extends Model
{
     protected $table='cms_tags';
    protected $guarded=[];




    public function blog()
    
    {

    	return $this->belongsToMany('App\Models\CMS\Blog' , 'blog_tag','blog_id','tag_id');
    }
     
}
