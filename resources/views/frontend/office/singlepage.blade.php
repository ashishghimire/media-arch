@extends('frontend.office.master')
@section('content')
</br>
</br>
</br>

<div class="container content">
			<div class="row">
				<div class="col-md-6">
					<h2 class="title-v2"><a href="{{url('/singlepage',$data->id)}}">{!!$data->title!!}</a></h2>
					<p>{!!$data->description!!}</p><br>
				</div>
				<div class="col-md-6">
					<img class="img-responsive" src="{{url('uploads'.'/'.$data->image)}}" alt="">
				</div>
			</div>
		</div><!--/container-->
		<!--=== End Content Part ===-->


@endsection