<?php

namespace App\Http\Controllers\Backend\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CMS\CmsHeader;
use File;
use App\Http\Requests\Backend\CMS\CreateCmsHeader;
use Illuminate\Support\Facades\Auth;


class HeaderController extends Controller
{
 
 public $model;

	 public function __construct(CmsHeader $model)
	 {
	 	$this->model=$model;

	 }   

	 public function index(){
        $this->model->find(1);
	 	return view('backend.CMS.dynamicheader.index');
	 }

	         public function create()
        {

            return view('backend.CMS.dynamicheader.create');
        }


        public function store(CreateCmsHeader $request)
        {


        	$see = $request->all();
          

          $image = $request->file('logo');
          $filename = time() . '.' . $image->getClientOriginalExtension();

            $p = $image->move(base_path() . '/public/uploads/' , $filename);
                        
            $data = [
                
                'title'=> $request->title,
                'logo'=> $filename,
                'description'=> $request->description,
                'position'=> $request->position,
                'css'=>$request->css,
            ];

            $this->model->create($data);
            
            return redirect()->back();
        }



        public function edit($id){
                $model=CmsHeader::find($id);



            return view('backend.CMS.dynamicheader.index',compact('model'));
        }







        public function update($id , CreateCmsHeader $request)
        
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
                
                'title'=> $request->title,
                'logo'=> $filename,
                'description'=> $request->description,
                'position'=> $request->position,
                'css'=>$request->css,
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
