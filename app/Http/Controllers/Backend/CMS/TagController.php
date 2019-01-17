<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CMS\CreateCmsTag;
use App\Models\CMS\CmsTag;


class TagController extends Controller
{

          public $model;

     public function __construct(CmsTag $model)
     {
        $this->model=$model;

     } 

      public function index()
    {
        
    }


    public function create()
        {

            return view('backend.CMS.tag.create');
        }


    public function store(CreateCmsTag $request)
    {
        
        $data = $request->all();
     

         $this->model->create($data);
            
           return redirect()->back();
    }

}
