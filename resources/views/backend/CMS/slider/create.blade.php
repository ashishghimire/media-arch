@extends ('backend.layouts.app')
	@section('content')

<head>
            <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

    </head>
 <div class="col-md-8">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

              Slider
                </h3>


            </div>
            <div class="box-body">
  		<form method="POST" action="{{route('admin.slider.store')}}" enctype="multipart/form-data">
		{{csrf_field()}}

           <div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" class="form-control">
			</div>

           <div class="form-group">

			<label for="Image">Image</label>
			<input type="file" name="image" accept=".jpg,.png,.JPEG,.bmp,." class="form-control">
           </div>

         <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description"  class="form-control"></textarea>

           </div>

           			{{ Form::submit(trans('submit'), ['class' => 'btn btn-primary btn-3x']) }}
			</form>
		</div>
	</div>
</div>




@endsection