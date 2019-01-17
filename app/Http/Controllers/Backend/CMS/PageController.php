<?php

namespace App\Http\Controllers\Backend\CMS;


use Illuminate\Http\Request;
use App\Http\Requests\Backend\CMS\CreatePageRequest;
use App\Models\CMS\Page;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public $model;

	 public function __construct(Page $model)
	 {
	 	$this->model=$model;

	 }   

	 public function index()
     {
        $page=$this->model->latest()->paginate(4);

	 	return view('backend.CMS.page.index',compact('page'));
	 }

	         public function create()
        {

            return view('backend.CMS.page.create');
        }


        public function store(CreatePageRequest $request)
        {


        	$data = $request->all();

            
            
            $data = [
                
                'title' => $request->title,
                'description' => $request->description,
                

                
                
            ];

            $this->model->create($data);
            
            return redirect('page');
        }



public function show($id)
{
    $pageshow=$this->model->findOrfail($id);
return view('backend.CMS.page.show',compact('pageshow'));






}

















           public function edit($id)
           {
                $data=$this->model->find(1);

            return view('backend.CMS.page.index',compact('data'));
        }



        public function update($id , CreatePageRequest $request)
        {
            $this->model->find($id)->update($request->all());
           
            return redirect()->back(); 
        }
        public function delete($id){

             $this->model->find($id)->delete();
             return redirect()->back();
        }
}
