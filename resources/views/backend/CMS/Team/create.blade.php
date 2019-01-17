@extends ('backend.layouts.app')
	@section('content')
 <div class="col-md-8">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

              Team
                </h3>


            </div>
            <div class="box-body">
  		<form method="POST" action="{{route('admin.team.store')}}" enctype="multipart/form-data">
		{{csrf_field()}}

           <div class="form-group">
			<label for="title">Name</label>
			<input type="text" name="name" class="form-control">
			  @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
			</div>

			<div class="form-group">
			<label for="title">Position</label>
			<input type="text" name="position" class="form-control">
			  @if ($errors->has('position')) <p class="help-block">{{ $errors->first('position') }}</p> @endif
			</div>

 			<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" placeholder="Describe ..." class="form-control"></textarea>
			  @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
		   </div>


           <div class="form-group">
			<label for="Image">Image</label>
			<input type="file" name="image" accept=".jpg,.png,.JPEG,.bmp,." class="form-control">
			  @if ($errors->has('image')) <p class="help-block">{{ $errors->first('image') }}</p> @endif
           </div>



           			{{ Form::submit(trans('submit'), ['class' => 'btn btn-primary btn-3x']) }}
			</form>
		</div>
	</div>
</div>


@endsection