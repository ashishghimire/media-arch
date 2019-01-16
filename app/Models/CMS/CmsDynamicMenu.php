<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Model;

class CmsDynamicMenu extends Model
{
    protected $table='cms_dynamic_menu';
    protected $fillable = ['title','slug','logo','location','parent_id','url'];

}
