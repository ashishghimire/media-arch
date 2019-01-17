<?php

namespace App\Http\Controllers\Backend\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CMS\CreateCmsMap;
use Illuminate\Support\Facades\Auth;
use App\Models\CMS\CmsMap;


class MapController extends Controller
{
         public $model;

	 public function __construct(CmsMap $model)
	 {
	 	$this->model=$model;

	 }   

	 public function index(){
	 	return view('backend.CMS.map.index');
	 }

	         public function create()
        {

            return view('backend.CMS.map.create');
        }


        public function store(CreateCmsMap $request)
        {


        	$data = $request->all();
            $user_id = Auth::User()->id;
            
            $data = [
                
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'key' => $request->key,
                'language' => '0',
                'user_id'=>$user_id,

                
                
            ];

            $this->model->create($data);
            
            return redirect()->back();
        }



           public function edit($id)
           {
                $data=$this->model->find(1);
            return view('backend.CMS.map.index',compact('data'));
        }



        public function update($id , CreateCmsMap $request)
        {
            $this->model->find($id)->update($request->all());
           
            return redirect()->back(); 
        }
        public function delete($id){

             $this->model->find($id)->delete();
             return redirect()->back();
        }


}
