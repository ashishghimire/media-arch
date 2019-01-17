<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Model;

class CmsCategory extends Model
{
     protected $table='cms_categories';
    protected $guarded = [];



    public function blog()
    {
    	return $this->hasMany('App\Models\CMS\Blog');
    }

}
