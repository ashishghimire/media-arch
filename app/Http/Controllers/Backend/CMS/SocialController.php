<?php

namespace App\Http\Controllers\Backend\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CMS\CreateCmsSocial;
use Illuminate\Support\Facades\Auth;
use App\Models\CMS\CmsSocial;


class SocialController extends Controller
{
       public $model;

	 public function __construct(CmsSocial $model)
	 {
	 	$this->model=$model;

	 }   

	 public function index(){
	 	return view('backend.CMS.social.index');
	 }

	         public function create()
        {

            return view('backend.CMS.social.create');
        }


        public function store(CreateCmsSocial $request)
        {


        	$data = $request->all();
            $user_id = Auth::User()->id;
            
            $data = [
                
                'title' => $request->title,
                'url'=>$request->url,
                'slug'=>$request->slug,
                'user_id'=>$user_id,
                
                
            ];

            $this->model->create($data);
            
            return redirect()->back();
        }

             public function edit($id)
                 {

                $data=$this->model->find(3);


            return view('backend.CMS.social.index',compact('data'));
        }





        public function update($id , CreateCmsSocial $request)
        {
            $this->model->find($id)->update($request->all());
           
            return redirect()->back(); 
        }


        public function delete($id){

             $this->model->find($id)->delete();
             return redirect()->back();
        }


}
