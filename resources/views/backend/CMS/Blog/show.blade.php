@extends('backend.layouts.app')

	@section('content')
	<h1>{{$blogshow->title}}</h1>

			 <div>
                  <img src="{!! url('uploads/'.$blogshow->image)!!}" style="width:150px; height:150px;">
           </div>


	<p>{{$blogshow->description}}</p>




@endsection