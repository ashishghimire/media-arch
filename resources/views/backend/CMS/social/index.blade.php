@extends('backend.layouts.app')

	@section('content')
    @include('backend.CMS.submenu') 
  
 <div class="col-md-4">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              social
                </h3>


            </div>
            <div class="box-body">		


{{ Form::model($data, ['route' => ['social.update', $data], 'class' => 'form-horizontal', 'role' => 'form','files'=>'true', 'method' => 'PATCH']) }}






	<div class="input-group">
          <span class="input-group-addon"><i class="fa fa-facebook-official fa-2x"></i></span>
               
            <input type="text" class="form-control"  name="url" value="{{$data->url}}">
              </div>
          </div>

                {{ Form::submit(trans('save'), ['class' => 'btn btn-primary btn-3x']) }}
         
			
			{{Form::close()}}
			

				



			
            
		</div>
	</div>
</div>

@endsection