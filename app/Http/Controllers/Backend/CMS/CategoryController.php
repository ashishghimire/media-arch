<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CMS\CreateCmsCategory;
use App\Models\CMS\CmsCategory;

class CategoryController extends Controller {
	public $model;

	public function __construct(CmsCategory $model) {
		$this->model = $model;

	}

	public function index() {

	}

	public function create() {
		$data = $this->model->all();

		return view('backend.CMS.Category.create', compact('data'));
	}

	public function store(CreateCmsCategory $request) {

		$data = $request->all();

		$this->model->create($data);

		return redirect()->back();
	}

	public function edit($id) {
		$data = $this->model->find($id);

		return view('backend.CMS.Category.create', compact('data'));
	}

	public function update() {

		$data == $this->model->find($id)->update($data);
		return view('backend.CMS.Category.index', compact('data'));
	}

	public function delete($id) {

		$data = $this->model->find($id)->delete();

		return redirect()->back();
	}

}
