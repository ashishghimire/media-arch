<?php

namespace App\Http\Controllers\Backend\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class FrontViewingController extends Controller
{
        public function index()
        {
            return view('backend.CMS.index');
        }


}
