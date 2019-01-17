<?php

namespace App\Http\Controllers\Backend\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CMS\CreateBlogRequest;
use App\Models\CMS\Blog;
use App\Models\CMS\CmsCategory;
use App\Models\CMS\CmsTag;
use Illuminate\Support\Facades\Auth;
use Session;

class BlogController extends Controller {
	public $model;
	public $cmscategory;
	public $cmstag;

	public function __construct(Blog $model, CmsCategory $cmscategory, CmsTag $cmstag) {
		$this->model = $model;
		$this->cmscategory = $cmscategory;
		$this->cmstag = $cmstag;
	}

	public function index(Blog $model, CmsCategory $cmscategory) {
		$blog = $this->model->latest()->paginate(4);

		$category_id = $this->cmscategory->pluck('title', 'id');

		return view('backend.CMS.Blog.index', compact('blog', 'category_id'));
	}

	public function create() {

		$category_id = $this->cmscategory->pluck('title', 'id');
		$tag = $this->cmstag->all();

		return view('backend.CMS.Blog.create', compact('category_id', 'tag'));
	}

	public function show($id) {

		$blogshow = Blog::findOrfail($id);

		return view('backend.CMS.Blog.show', compact('blogshow'));
	}

	public function store(CreateBlogRequest $request) {

		$data = $request->all();

		$user_id = Auth::User()->id;
		$photo = $request->file('image');
		$originalName = $photo->getClientOriginalName();
		$extension = $photo->getClientOriginalExtension();
		$size = $photo->getClientSize();
		$originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - strlen($extension) - 1);
		$number = mt_rand(100000, 999999);
		$filename = $originalNameWithoutExt . '-' . $number . '-' . $extension;
		$photo = $request->file('image');

		$p = $photo->move(
			base_path() . '/public/uploads/', $filename
		);

		$data = [

			'title' => $request->title,
			'description' => $request->description,
			'category_id' => $request->category_id,
			'image' => $filename,
			'user_id' => $user_id,

		];

		$latest = $this->model->create($data);

		$latest->tags()->attach($request->tags);

		Session::flash('flash_success', 'The Profile has been created!.');
		Session::flash('flash_type', 'alert-success');

		return redirect('backend.CMS.Blog.index');
	}

	public function edit($id, CmsCategory $cmscategory) {

		$blog = $this->model->find($id);
		$category_id = $this->cmscategory->pluck('title', 'id');

		return view('backend.CMS.Blog.edit', compact('blog', 'category_id'));
	}

	public function update($id, CreateBlogRequest $request) {

		if ($request->hasFile('image')) {

			$photo = $request->file('image');
			$user_id = Auth::User()->id;

			$originalName = $photo->getClientOriginalName();

			$extension = $photo->getClientOriginalExtension();
			$size = $photo->getClientSize();
			$originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - strlen($extension) - 1);

			$filename = $originalNameWithoutExt . '-' . '-' . "." . $extension;
			$photo = $request->file('image');

			$p = $photo->move(
				base_path() . '/public/uploads/', $filename
			);

			$data = [

				'title' => $request->title,
				'description' => $request->description,
				'image' => $filename,
				'url' => $request->url,
				'user_id' => $user_id,

			];

			$this->model->find($id)->update($data);
		} else {

			$this->model->find($id)->update($request->all());
		}

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
