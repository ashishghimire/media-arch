@extends ('backend.layouts.app')
	@section('content')
 <div class="col-md-12">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

              About1
                </h3>


            </div>
            <div class="box-body">
  		<form method="POST" action="{{route('admin.about1.store')}}" enctype="multipart/form-data">
		{{csrf_field()}}

           <div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" class="form-control">
			</div>


           <div class="form-group">
			<label for="title">Icon</label>
			<input type="text" name="icon" class="form-control">
			</div>


           <div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" id="editor1" placeholder="Describe ..." class="form-control"></textarea>
		   </div>

           			{{ Form::submit(trans('submit'), ['class' => 'btn btn-primary btn-3x']) }}
			</form>
		</div>
	</div>
</div>


@endsection