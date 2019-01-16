<?php

namespace App\Http\Controllers\Backend\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CMS\CmsDynamicMenu;

use File;
use App\Http\Requests\Backend\CMS\CreateCmsDynamicMenuHeader;

use Illuminate\Support\Facades\Auth;


class DynamicMenuController extends Controller
{
 
 public $model;

     public function __construct(CmsDynamicMenu $model)
     {
        $this->model=$model;

     }   

     public function index(){
        $this->model->find(3);
        return view('backend.CMS.dynamicmenu.index');
     }

             public function create()
        {

            return view('backend.CMS.dynamicmenu.create');
        }


        public function store(CreateCmsDynamicMenuHeader $request)
        {


            $see = $request->all();
          
            $user_id = Auth::User()->id;

          $image = $request->file('logo');
          $filename = time() . '.' . $image->getClientOriginalExtension();

            $p = $image->move(base_path() . '/public/uploads/' , $filename);
                        
            $data = [
                
                'title' => $request->title,
                'slug' => $request->slug,
                'logo' => $filename,

                'location' => $request->location,
                'url'=>$request->url,
                'parent_id'=>0,
            ];

            $this->model->create($data);
            
            return redirect()->back();
        }



        public function edit($id){
                $data=CmsDynamicMenu::find(3);
             



            return view('backend.CMS.dynamicmenu.index',compact('data'));
        }







        public function update($id , CreateCmsDynamicMenuHeader $request)
        
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
                
                'title' => $request->title,
                'slug' => $request->slug,
                'logo' => $filename,

                'location' => $request->location,
                'url'=>$request->url,
                'parent_id'=>0,
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
