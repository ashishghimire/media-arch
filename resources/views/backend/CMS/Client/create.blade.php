@extends ('backend.layouts.app')
	@section('content')
 <div class="col-md-8">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

          Client
                </h3>


            </div>
            <div class="box-body">
  		<form method="POST" action="{{route('admin.client.store')}}" enctype="multipart/form-data">
		{{csrf_field()}}



           <div class="form-group">

			<label for="Image">Image</label>
			<input type="file" name="image" accept=".jpg,.png,.JPEG,.bmp,." class="form-control">
           </div>
            @if ($errors->has('image')) <p class="help-block">{{ $errors->first('image') }}</p> @endif



           			{{ Form::submit(trans('submit'), ['class' => 'btn btn-primary btn-3x']) }}
			</form>
		</div>
	</div>
</div>


@endsection