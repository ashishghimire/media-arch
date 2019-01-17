@extends('backend.layouts.app')


	@section('content')
 <div class="col-md-8">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              tag
                </h3>


            </div>
            <div class="box-body">		
  		<form method="POST" action="{{route('tag.store')}}" enctype="multipart/form-data">
				{{csrf_field()}}
           <div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" class="form-control">
			</div>
           
           
           
           
           
           
            <div class="pull-right">
                {{ Form::submit(trans('save'), ['class' => 'btn btn-primary btn-3x']) }}
            </div><!--pull-right-->
			</form>
		</div>
	</div>
</div>

@endsection