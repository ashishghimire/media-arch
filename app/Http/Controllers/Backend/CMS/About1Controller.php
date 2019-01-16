<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CMS\CreateAbout1Request;
use App\Models\CMS\About1;
use Session;

class About1Controller extends Controller {
	public $model;

	public function __construct(About1 $model) {
		$this->model = $model;

	}

	public function index() {
		$data = $this->model->paginate(4);

		return view('backend.CMS.About1.index', compact('data'));
	}

	public function create() {
		return view('backend.CMS.About1.create');
	}

	public function store(CreateAbout1Request $request) {

		$data = $request->all();

		$latest = $this->model->create($data);

		Session::flash('flash_success', 'The Profile has been created!.');
		Session::flash('flash_type', 'alert-success');

		return redirect()->back();
	}

	public function edit($id) {

		$data = $this->model->find($id);
		return view('backend.CMS.About1.edit', compact('data'));
	}

	public function update($id, CreateAbout1Request $request) {

		$data = $request->all();

		$this->model->find($id)->update($request->all());
		Session::flash('flash_success', 'The Profile has been Updated!.');
		Session::flash('flash_type', 'alert-success');
		return redirect()->back();
		Session::flash('flash_success', 'The Profile has been Updated!.');
		Session::flash('flash_type', 'alert-success');

	}

	public function delete($id) {

		$this->model->find($id)->delete();
		return redirect()->back();
		Session::flash('flash_success', 'The Profile has been Deleted!.');
		Session::flash('flash_type', 'alert-success');

	}

}
