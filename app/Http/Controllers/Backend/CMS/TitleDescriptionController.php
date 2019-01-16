<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CMS\CreateTitleDescriptionRequest;
use App\Models\CMS\TitleDescription;
use Session;

class TitleDescriptionController extends Controller {
	public $model;

	public function __construct(TitleDescription $model) {
		$this->model = $model;

	}

	public function index() {
		$data = $this->model->paginate(12);

		return view('backend.CMS.TitleDescription.index', compact('data'));
	}

	public function create() {
		$data = $this->model->paginate(4);

		return view('backend.CMS.TitleDescription.create', compact('data'));
	}

	public function store(CreateTitleDescriptionRequest $request) {

		$data = $request->all();

		$latest = $this->model->create($data);

		Session::flash('flash_success', 'The Profile has been Updated!.');
		Session::flash('flash_type', 'alert-success');

		return redirect()->back();
	}

	public function edit($id) {

		$data = $this->model->find($id);
		return view('backend.CMS.TitleDescription.edit', compact('data'));
	}

	public function update($id, CreateTitleDescriptionRequest $request) {
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
