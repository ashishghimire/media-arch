@extends ('backend.layouts.app')
	@section('content')
	<head>
            <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

	</head>

 <div class="col-md-8">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

              OurService
                </h3>


            </div>
      <div class="box-body">
  		<form method="POST" action="{{route('admin.ourservice.store')}}" enctype="multipart/form-data">
		    {{csrf_field()}}

      <div class="form-group">
		 {{ Form::label('Title','Title:*', ['class' => 'col-lg-2 control-label']) }}

        <div class=" col-lg-12">
			<input type="text" name="title" class="form-control">
			 @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
			</div>
      </div>

           <div class="form-group">
			 {{ Form::label('Description','Description:*', ['class' => 'col-lg-2 control-label']) }}
      <div class="col-lg-12">
			<textarea  name="description" id="editor1" class="form-control editor1" ></textarea>
			 @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
      </div>
		   </div>

 <div class="form-group">
                {{ Form::label('Icon','Icon:*', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-12">
                    <select class="form-control" name="icon">
                      <option name="" value="icon-custom icon-lg icon-bg-u rounded-x icon-line icon-present"><i  class="icon-box"></i>Gift</option>
                       <option name="" value="icon-custom icon-lg icon-bg-u rounded-x icon-line icon-rocket"><i class="fa fa-twitter fa-4x"></i>Rocket</option>
                    <option name="" value="icon-custom icon-md rounded-x icon-bg-u icon-line icon-diamond"><i class="fa fa-twitter fa-4x"></i>Diamond</option>
                    <option name="" value="icon-custom icon-md rounded-x icon-bg-u icon-line icon-trophy"><i class="fa fa-twitter fa-4x"></i>Trophy</option>
                    <option name="" value="icon-custom icon-md rounded-x icon-bg-u icon-line icon-directions"><i class="fa fa-twitter fa-4x"></i>Direction</option>
                   

                    </select>
                </div>
            </div>

		 <div class="form-group">
      {{ Form::label('Image','Image:*', ['class' => 'col-lg-2 control-label']) }}
<div class="col-lg-12">

      <input type="file" name="image" accept=".jpg,.png,.JPEG,.bmp,." class="form-control">
 @if ($errors->has('image')) <p class="help-block">{{ $errors->first('image') }}</p> @endif
           </div>
</div>
<div class="col-lg-12">
          {{ Form::submit(trans('submit'), ['class' => 'btn btn-primary btn-3x']) }}
        </div>
			</form>
		</div>
	</div>
</div>



@endsection