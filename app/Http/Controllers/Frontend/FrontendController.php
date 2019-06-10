<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CMS\CreateContactRequest;
use App\Models\CMS\About1;
use App\Models\CMS\About;
use App\Models\CMS\Blog;
use App\Models\CMS\Client;
use App\Models\CMS\CmsCategory;
use App\Models\CMS\CmsSlider;
use App\Models\CMS\CmsTag;
use App\Models\CMS\Contact;
use App\Models\CMS\Count;
use App\Models\CMS\OurService;
use App\Models\CMS\Photo;
use App\Models\CMS\Portfolio;
use App\Models\CMS\Team;
use App\Models\CMS\Testimonial;
use App\Models\CMS\TitleDescription;
use App\Models\CMS\TotalCount;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;

/**
 * Class FrontendController.
 */
class FrontendController extends Controller {

	public $blog;
	public $testimonial;
	public $contact;
	public $photo;
	public $titledescription;
	public $team;
	public $slider;
	public $portfolio;
	public $ourservice;
	public $client;
	public $cmscategory;
	public $cmstag;
	public $count;
	public $totalcount;
	public $about;
	public $about1;

	public function __construct(Testimonial $testimonial, Photo $photo, Contact $contact, CmsSlider $slider, TitleDescription $titledescription, About $about, About1 $about1, Team $team, OurService $ourservice, Blog $blog, Portfolio $portfolio, Client $client, CmsCategory $cmscategory, CmsTag $cmstag, Count $count, TotalCount $totalcount) {
	    $this->client = $client;
		$this->titledescription = $titledescription;
		$this->team = $team;
		$this->portfolio = $portfolio;
		$this->blog = $blog;
		$this->cmscategory = $cmscategory;
		$this->cmstag = $cmstag;
		$this->slider = $slider;
		$this->count = $count;
		$this->totalcount = $totalcount;
		$this->ourservice = $ourservice;
		$this->about = $about;
		$this->about1 = $about1;
		$this->photo = $photo;
		$this->contact = $contact;
		$this->testimonial = $testimonial;

	}

	public function index(Blog $blog, Client $client, Portfolio $portfolio) {
	    $featurepost = $this->blog->take(8)->get();
		$trend = $this->blog->inRandomOrder()->take(4)->get();

		//business page display
		$carbonweek = Carbon::now()->subDay(7);
		$weeklynews = Blog::where('created_at', '>', $carbonweek)->get();

		$carbon = Carbon::now()->format('m');
		$monthlynews = Blog::whereRaw('MONTH(created_at)=?', [$carbon])->get();

		// $business1 = Blog::where('category_id', '=', 2)->latest()->first();
		$business1 = Blog::where('category_id', '=', 2)->latest()->first();

		$business2 = Blog::where('category_id', '=', 2)->paginate(4);

		$featurednews = Blog::where('category_id', '=', 2)->paginate(4);
		$education1 = Blog::where('category_id', '=', 2);
		$featurednews1 = Blog::where('category_id', '=', 2)->paginate(4);
		$breakingnews = Blog::where('category_id', '=', 1)->paginate(4);

		$client = $this->client->get();
		$team = $this->team->get();
		// $client = $this->client->inRandomOrder()->take(5)->get();
		$portfolio = $this->portfolio->take(9)->get();
		$blog1 = $this->blog::orderBy('id', 'desc')->take(3)->get();


		$ourservice = $this->ourservice->get();
		$ourservice1 = $this->ourservice->inRandomOrder()->take(3)->get();
		$about = $this->about->inRandomOrder()->take(3)->get();
		$about1 = $this->about1->inRandomOrder()->take(3)->get();
		$slider = $this->slider->inRandomOrder()->take(3)->get();
		$titledescription1 = $this->titledescription->find(1);
		$titledescription2 = $this->titledescription->find(2);
		$titledescription3 = $this->titledescription->find(3);
		$titledescription4 = $this->titledescription->find(4);
		$titledescription5 = $this->titledescription->find(5);
		$titledescription6 = $this->titledescription->find(6);
		$titledescription7 = $this->titledescription->find(7);
		$titledescription8 = $this->titledescription->find(8);
		$photo2 = $this->photo->find(1);
		$testimonial = $this->testimonial->take(5)->get();

// //mobile page dispaly

// 		$mobile = $this->blog->where('category_id', '=', 3)->latest()->first();

// 		$mobile1 = $this->blog->where('category_id', '=', 3)->paginate(4);

// //fashion page dispaly

// 		$fashion = $this->blog->where('category_id', '=', 4)->latest()->first();

// 		$fashion1 = $this->blog->where('category_id', '=', 4)->paginate(4);

// 		//travel and sport page

// 		$sport = $this->blog->where('category_id', '=', 1)->latest()->first();

// 		$sport1 = $this->blog->where('category_id', '=', 1)->paginate(4);

// //tech page display

// 		$tech = $this->blog->where('category_id', '=', 6)->latest()->first();

// 		$tech1 = $this->blog->where('category_id', '=', 6)->paginate(4);

// //total vist
		// 		$totalvisitpage = $this->totalcount->OrderBy('total', 'DESC')->take(4)->get();

		return view('frontend.office.home', compact('slider', 'business1', 'business2', 'mobile', 'mobile1', 'fashion', 'fashion1', 'sport', 'sport1', 'tech', 'tech1', 'randompage', 'featurepost', 'trend', 'totalvisitpage', 'featurednews1', 'featurednews', 'education1', 'breakingnews', 'weeklynews', 'monthlynews', 'client', 'portfolio', 'blog1', 'ourservice', 'ourservice1', 'team', 'about', 'about1', 'titledescription3', 'titledescription4', 'titledescription5', 'titledescription1', 'photo1', 'photo2', 'titledescription2', 'titledescription6', 'titledescription7', 'titledescription8', 'testimonial'));

	}

	public function singlepage($id, OurService $ourservice, About $about) {

		$data = $ourservice->find($id);
		$data1 = $about->find($id);

		return view('frontend.office.singlepage', compact('data', 'data1'));
	}

	public function singlepage1($id, About $about) {

		$data = $about->find($id);

		return view('frontend.office.singlepage1', compact('data'));
	}

	public function contact(CreateContactRequest $request) {

		$latest = $this->contact->create($request->all());

		$formData = $request->all();
		$data['name'] = $request->name;
		$data['email'] = 'mascotmhrzn@gmail.com';
		$data['messages'] = $request->message;

		\Mail::Send('frontend.emails.sendemail', $data, function ($m) use ($data) {

			$m->from($data['email'], $data['name']);
			$m->to('suryaman2072@gmail.com')->subject($data['messages']);
		});

		return redirect('/')->withFlashSuccess('Email has been sent successfully.wait for response');

		Session::flash('flash_success', 'The Profile has been Updated!.');
		Session::flash('flash_type', 'alert-success');

		return redirect()->back();
	}

	public function showblogbycategory($id, CmsCategory $cmscategory, Blog $blog) {

		$category = $this->cmscategory->find($id);

		$data = Blog::where('category_id', 1)->get();

		$data2 = Blog::where('category_id', 2)->get();

		$data3 = Blog::where('category_id', 3)->get();

		$data4 = Blog::where('category_id', 4)->get();

		$data5 = Blog::where('category_id', 5)->get();

		return redirect()->back();
	}

	public function show($id, CmsCategory $cmscategory, Count $count, TotalCount $totalcount, Blog $blog) {

//totalcount and total visit
		$blogshow = $this->blog->findOrfail($id);
		$randompost = $this->blog->inRandomOrder()->take(2)->get();
		$recentpost = $this->blog->inRandomOrder()->take(6)->get();
		$trendpost = $this->blog->inRandomOrder()->take(6)->get();

		$category = $this->cmscategory->find($id);

		$data1 = Blog::where('category_id', 1)->take(1)->get();

		$data2 = Blog::where('category_id', 2)->take(1)->get();

		$data3 = Blog::where('category_id', 3)->take(1)->get();

		$data4 = Blog::where('category_id', 4)->take(1)->get();

		$data5 = Blog::where('category_id', 5)->take(1)->get();
		$data6 = Blog::where('category_id', 6)->take(1)->get();

		$user_ip = request()->ip();

		$total = 0;
		$visit = $count->select('user_ip')->where('user_ip', '=', $user_ip)->where('blog_id', '=', $id)->count();

		if ($visit >= 1) {

		} else {
			$count->create(
				[
					'blog_id' => $id,
					'user_ip' => $user_ip,
				]);

			$visit2 = $totalcount->where('blog_id', '=', $id)->count();

			$totalcounts = '';
			if ($visit2 == 0) {
				$totalcount->create([

					'blog_id' => $id,
					'total' => 1,
				]);

			} else {

				$count = $totalcount->where('blog_id', '=', $id)->first();

				$total = $count->total;
				$count_id = $count->id;

				$t = ++$total;
				$totalcount->find($count_id)->update(['total' => $t]);
			}
		}
		$totalvisit = $totalcount->where('blog_id', '=', $id)->first();

		$totalvisitpage = $totalcount->OrderBy('total', 'DESC')->take(5)->get();

		return view('frontend.unify.index', compact('blogshow', 'totalvisit', 'data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'category', 'randompost', 'recentpost', 'trendpost', 'totalvisitpage', 'featurednews'));

	}

	public function showcatbyblog($id) {

		$category = $this->cmscategory->find($id);

		$data = $this->blog->where('category_id', $id)->get();

		return view('frontend.exacode.showallcat', compact('data', 'category', 'data1'));

	}

	public function macros() {

		return view('frontend.macros');
	}

	public function store(Request $request) {

		//
		$org = new Org();
		$org->title = $request->input('title');
		//$banquet->address = $request->input('address');
		//$banquet->email = $request->input('email');
		//$banquet->website = $request->input('website');
		$org->landingImage = $request->file('landingImage');
		$landingImage = $request->file('landingImage');
		$extLandingImage = $landingImage->guessClientExtension();
		$landingImageName = $landingImage->getClientOriginalName();
		$landingImage->storeAs($request->input('title'), $landingImageName);
		$galleryImages = $request->file('galleryImages');

		foreach ($galleryImages as $galleryImage) {
			$galleryImageName = $galleryImage->getClientOriginalName();
			$galleryImage->storeAs($request->input('title')+'/gallery/', $galleryImageName);

		}

	}

	public function fashion($id, Blog $blog) {

		$blog = $blog->find($id);
		$cat_id = $blog->category->id;
		$related_post = $blog->where('category_id', $cat_id)->take(5)->get();

		return view('frontend/unify/singlepage', compact('blog', 'related_post'));
	}

	public function aboutus(About $about, TitleDescription $titledescription) {

		$titledescription1 = $this->titledescription->find(1);
		$titledescription2 = $this->titledescription->find(2);
		$titledescription3 = $this->titledescription->find(3);
		$about = $this->about->find(1);
		$about1 = $this->about1->inRandomOrder()->take(3)->get();
		$photo1 = $this->photo->find(1);
		$photo2 = $this->photo->find(2);
		return view('frontend/office/NextPage/aboutus', compact('titledescription1', 'about', 'about1', 'photo1', 'photo2', 'titledescription2', 'titledescription3'));
	}

	public function team() {

		$titledescription4 = $this->titledescription->find(4);
		$team = $this->team->inRandomOrder()->take(9)->get();
		return view('frontend/office/NextPage/team', compact('titledescription4', 'team'));

	}
	public function service() {

		$ourservice = $this->ourservice->latest()->take(6)->get();
		$ourservice1 = $this->ourservice->inRandomOrder()->take(3)->get();
		$titledescription5 = $this->titledescription->find(5);
		return view('frontend/office/NextPage/services', compact('ourservice', 'ourservice1', 'titledescription5'));

	}

	public function portfolio() {
		$portfolio = $this->portfolio->take(9)->get();
		$titledescription7 = $this->titledescription->find(7);
		return view('frontend/office/NextPage/portfolio', compact('portfolio', 'titledescription7'));
	}

	public function news() {

		$blog1 = $this->blog->inRandomOrder()->get();
		$titledescription6 = $this->titledescription->find(6);
		return view('frontend/office/NextPage/news', compact('blog1', 'titledescription6'));

	}

	public function singlepagenews($id, Blog $blog) {
		$data = $blog->findOrFail($id);
		return view('frontend/office/NextPage/singlepagenews', compact('data'));
	}

}
