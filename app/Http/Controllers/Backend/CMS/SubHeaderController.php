<?php

namespace App\Http\Controllers\Backend\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CMS\CreateCmsSubHeader;
use Illuminate\Support\Facades\Auth;
use App\Models\CMS\CmsSubHeader;



class SubHeaderController extends Controller
{
       public $model;

	 public function __construct(CmsSubHeader $model)
	 {
	 	$this->model=$model;

	 }   

	 public function index(){
	 	return view('backend.CMS.subheader.index');
	 }

	         public function create()
        {

            return view('backend.CMS.subheader.create');
        }


        public function store(CreateCmsSubHeader $request)
        {


        	$data = $request->all();
            $user_id = Auth::User()->id;
            $photo = $request->file('logo');
          


            $originalName = $photo->getClientOriginalName();
            $extension = $photo->getClientOriginalExtension();
            $size = $photo->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            $number = mt_rand(1000000000 , 9999999999);
            $filename = $originalNameWithoutExt . '-' . $number . '-' . $extension;
            $photo = $request->file('logo');


            $p = $photo->move(
                base_path() . '/public/uploads/' , $filename
            );
          
            
            $data = [
                
                'description' => $request->description,
                'logo'=>$filename
                
            ];

            $this->model->create($data);
            
            return redirect()->back();
        }
        
        public function edit($id){

            $model=CmsSubHeader::find($id);
            return view('backend.CMS.subheader.index',compact('model'));
        }

        public function update($id , CreateCmsSubHeader $request)
        {


            if($request->hasFile('logo'))
            
            {

            $photo = $request->file('logo');


           $originalName = $photo->getClientOriginalName();

            $extension = $photo->getClientOriginalExtension();
            $size = $photo->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            
            $filename = $originalNameWithoutExt . '-'  . '-'  . "." . $extension;
            $photo = $request->file('logo');


           $p = $photo->move(
                base_path() . '/public/uploads/' , $filename
            );
            
           $data = [
                
                
                'logo'=> $filename,
                'description'=> $request->description,
                
            ];
          $this->model->find($id)->update($data);
      }
      else
      {
        

           $this->model->find($id)->update($request->all());
        }
       

                        
           
           
            return redirect()->back(); 
        }






        public function delete($id){

             $this->model->find($id)->delete();
             return redirect()->back();
        }


}
