@extends('backend.layouts.app')

	@section('content')
    @include('backend.CMS.submenu')	
	
 <div class="col-md-8">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              map
                </h3>


            </div>
            <div class="box-body">		


{{ Form::model($data, ['route' => ['map.update', $data], 'class' => 'form-horizontal', 'role' => 'form','files'=>'true', 'method' => 'PATCH']) }}







           <div class="form-group">
			{!! Form::label('longitude' ,'longitude:',['class'=>'col-lg-2 control-label']) !!}
			<div class="col-lg-10" >
     		 {!! Form::text('longitude',null,['class'=>'form-control']) !!}
     		</div>
			</div>



		



        
           
      <div class="form-group">
	   {!! Form::label('latitude' ,'latitude :',['class'=>'col-lg-2 control-label']) !!}
			<div class="col-lg-10">

    	{!! Form::textarea('latitude',null,['class'=>'form-control']) !!}
		   </div>
		   </div>




      <div class="form-group">
	   {!! Form::label('language ' ,'language:',['class'=>'col-lg-2 control-label']) !!}
			<div class="col-lg-10">

    	{!! Form::textarea('language',null,['class'=>'form-control']) !!}
		   </div>
		   </div>


		   <div class="form-group">
	   {!! Form::label('key ' ,'key:',['class'=>'col-lg-2 control-label']) !!}
	   <div class="col-lg-10">
    	{!! Form::text('key',null,['class'=>'form-control']) !!}
		   </div>
		</div>


		   

          
		














			
            <div class="pull-right">
                {{ Form::submit(trans('save'), ['class' => 'btn btn-primary btn-3x']) }}
            </div><!--pull-right-->
		</div>
	</div>
</div>

@endsection