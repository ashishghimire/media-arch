<?php

namespace App\Http\Controllers\Backend\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CMS\CreateCmsPagination;
use Illuminate\Support\Facades\Auth;
use App\Models\CMS\CmsPagination;



class PaginationController extends Controller
{
    
         public $model;

	 public function __construct(CmsPagination $model)
	 {
	 	$this->model=$model;

	 }   

	 public function index(){
	 	return view('backend.CMS.pagination.index');
	 }

	         public function create()
        {

            return view('backend.CMS.pagination.create');
        }


        public function store(CreateCmsPagination $request)
        {


        	$data = $request->all();
            $user_id = Auth::User()->id;
            
            $data = [
                
                'title' => $request->title,
                'per_page' => $request->per_page,
                'user_id'=>$user_id,
                
                
            ];

            $this->model->create($data);
            
            return redirect()->back();
        }




           public function edit($id){
                $data=$this->model->find(1);

            return view('backend.CMS.pagination.index',compact('data'));
        }



        public function update($id , CreateCmsPagination $request)
        {

            $this->model->find($id)->update($request->all());
           
            return redirect()->back();
        }


        public function delete($id){

             $this->model->find($id)->delete();
             return redirect()->back();
        }


}
