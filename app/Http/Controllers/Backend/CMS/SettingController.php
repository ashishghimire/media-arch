<?php

namespace App\Http\Controllers\Backend\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CMS\CreateCmsSetting;
use Illuminate\Support\Facades\Auth;
use App\Models\CMS\CmsSetting;



class SettingController extends Controller
{
         public $model;

	 public function __construct(CmsSetting $model)
	 {
	 	$this->model=$model;

	 }   

	 public function index(){
	 	return view('backend.CMS.setting.index');
	 }

	         public function create()
        {

            return view('backend.CMS.setting.create');
        }


        public function store(CreateCmsSetting $request)
        {


        	$data = $request->all();
            
            $data = [
                
                'title' => $request->title,
                'slug' => $request->description,
                
                
            ];

            $this->model->create($data);
            
            return redirect()->back();
        }
                 public function edit($id){
                $data=$this->model->all();
            return view('backend.CMS.setting.edit');
        }
        public function update($id , CreateCmsSetting $request)
        {
            $this->model->find($id)->update($request->all());
           
            return redirect('admin/skill'); 
        }
        public function delete($id){

             $this->model->find($id)->delete();
             return redirect()->back();
        }


}
