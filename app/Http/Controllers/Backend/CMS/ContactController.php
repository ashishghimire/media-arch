<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CMS\CreateContactRequest;
use App\Models\CMS\Contact;
use Session;

class ContactController extends Controller {
	public $model;

	public function __construct(Contact $model) {
		$this->model = $model;

	}

	public function index() {
		$data = $this->model->paginate(4);

		return view('backend.CMS.Contact.index', compact('data'));
	}

	public function create() {
		return view('backend.CMS.Contact.create');
	}

	public function store(CreateContactRequest $request) {
		$data = $request->all();
		dd($data);

		$latest = $this->model->create($data);

		Session::flash('flash_success', 'The Profile has been Updated!.');
		Session::flash('flash_type', 'alert-success');

		return redirect()->back();
	}

	public function edit($id) {

		$data = $this->model->find($id);
		return view('backend.CMS.Contact.edit', compact('data'));
	}

	public function update($id, CreateContactRequest $request) {

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

	public function send_mail(CreateMailRequest $request) {

		$formData = $request->all();
		$data['name'] = $request->name;
		$data['email'] = $request->email;
		$data['phone'] = $request->phone;
		$data['subject'] = $request->subject;
		$data['messages'] = $request->message;

		\Mail::Send('frontend.email.sendMail', $data, function ($m) use ($data) {

			$m->from($data['email'], $data['name']);
			$m->to('mascotmhrzn@gmail.com')->subject($data['subject']);
		});

		return redirect('/')->withFlashSuccess('Email has been sent successfully.wait for response');
	}

}
