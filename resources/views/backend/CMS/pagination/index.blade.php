@extends('backend.layouts.app')

	@section('content')
    @include('backend.CMS.submenu')	
	
 <div class="col-md-8">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              pagination
                </h3>


            </div>
            <div class="box-body">		


{{ Form::model($data, ['route' => ['pagination.update', $data], 'class' => 'form-horizontal', 'role' => 'form','files'=>'true', 'method' => 'PATCH']) }}







           <div class="form-group">
			{!! Form::label('title' ,'title:',['class'=>'col-lg-2 control-label']) !!}
			<div class="col-lg-10" >
     		 {!! Form::text('title',null,['class'=>'form-control']) !!}
     		</div>
			</div>


		   <div class="form-group">
	   {!! Form::label('per_page ' ,'Per Page:',['class'=>'col-lg-2 control-label']) !!}
	   <div class="col-lg-10">
    	{!! Form::text('per_page',null,['class'=>'form-control']) !!}
		   </div>
		</div>


		   

          
		














			
            <div class="pull-right">
                {{ Form::submit(trans('save'), ['class' => 'btn btn-primary btn-3x']) }}
            </div><!--pull-right-->
		</div>
	</div>
</div>

@endsection