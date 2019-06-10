@extends('frontend.office.master')
@section('content')

<div class="container content">
    <ul class="breadcrumb" style="margin-top: 60px; margin-bottom: 30px; background:#f3f3f3;">
        <li><a href="/">Home</a></li>
        <li><a href="/news">News</a></li>
        <li class="active"> Single Page News</li>
    </ul>
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive" src="{{url('images/background'.'/'.$data->image)}}" alt="" style="height:293px; width:293px;">
        </div>
        <div class="col-md-8" style="margin-top:20px;">
            <h2 class="title-v2">{!!$data->title!!}</h2>
            <p>{!!$data->description!!}</p>
        </div>
    </div>
</div><!--/container-->
@endsection