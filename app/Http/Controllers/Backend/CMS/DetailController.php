<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CMS\CreateDetailRequest;
use App\Models\CMS\Detail;
use Session;

class DetailController extends Controller {
	public $model;

	public function __construct(Detail $model) {
		$this->model = $model;

	}

	public function index() {
		$data = $this->model->paginate(4);

		return view('backend.Cms.detail.index', compact('data'));
	}

	public function create() {
		return view('backend.Cms.detail.create');
	}

	public function store(CreateDetailRequest $request) {

		$data = $request->all();

		$latest = $this->model->create($data);

		Session::flash('flash_success', 'The Profile has been Updated!.');
		Session::flash('flash_type', 'alert-success');

		return redirect()->back();
	}

	public function edit($id) {

		$data = $this->model->find($id);
		return view('backend.Cms.detail.edit', compact('data'));
	}

	public function update($id, CreateDetailRequest $request) {

		$data = $request->all();

		$this->model->find($id)->update($request->all());
		Session::flash('flash_success', 'The Profile has been Updated!.');
		Session::flash('flash_type', 'alert-success');
		return redirect()->back();
	}

	public function delete($id) {

		$this->model->find($id)->delete();
		return redirect()->back();
	}

}
