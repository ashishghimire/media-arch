@extends('frontend.office.master')
@section('content')
</br>
</br>
</br>
{{-- @include('frontend.office.header2') --}}
<div class="container content">
			<div class="row">
				<div class="col-md-6">
					<h2 class="title-v2"><a href="{{url('/singlepage1',$data->id)}}">{!!$data->title!!}</a></h2>
					<p>{!!$data->description!!}</p><br>
				</div>

			</div>
		</div><!--/container-->
		<!--=== End Content Part ===-->


@endsection