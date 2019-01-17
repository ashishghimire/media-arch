@extends('backend.layouts.app')
@section('before-styles')
<link rel="stylesheet" type="text/css" href="{{asset('public/css/select2.min.css')}}">

	@section('content')

		 <div class="col-md-8">
		 	<head>
            <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

	</head>

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

              Dynamic Menu
                </h3>


            </div>

            <div class="box-body">
  		<form method="POST" action="{{route('admin.blog.store')}}" enctype="multipart/form-data">
				{{csrf_field()}}
           <div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" class="form-control">
       @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
			</div>

             <div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" id="editor1" class="form-control"></textarea>
 @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
			</div>







		</div>
	</div>



</div>

<div class="col-md-4">
	 <div class="box box-primary">

			 <div class="form-group">

			<label for="image">Image</label>
			<input type="file" name="image" accept=".jpg,.png,.JPEG,.bmp,." class="form-control">
 @if ($errors->has('image')) <p class="help-block">{{ $errors->first('image') }}</p> @endif
           </div>



</div>
<div class="form-group">
            <label class="col-lg-4"> Category:</label>
            <div class="col-lg-10">
                {!!Form::select('category_id',$category_id)!!}


            </div>
        </div>

         <div class="pull-right">
                {{ Form::submit(trans('publish'), ['class' => 'btn btn-primary btn-3x']) }}
            </div><!--pull-right-->


</div>

      </form>











@endsection

@section('after-scripts')



 <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>

            <script src="{{asset('public/js/select2.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script>
    $('.select2-multi').select2();
</script>

@stop