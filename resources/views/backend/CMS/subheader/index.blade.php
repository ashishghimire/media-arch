@extends('backend.layouts.app')

	@section('content')
    @include('backend.CMS.submenu') 
  
 <div class="col-md-8">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              subheader
                </h3>


            </div>
            <div class="box-body">		


{{ Form::model($model, ['route' => ['subheader.update', $model], 'class' => 'form-horizontal', 'role' => 'form','files'=>'true', 'method' => 'PATCH']) }}







          

		<div class="form-group">
					{!! Form::label('logo' ,'logo:',['class'=>'col-lg-2 control-label']) !!}
			<div class="col-lg-5">
      				{!! Form::file('logo',null,['class'=>'form-control']) !!}
      				<div class="col-lg-5">
             			<img src="{!! url('uploads/'.$model->logo)!!}" style="width:150px; height:150px;">
             		</div>

      			</div>
		</div>



        
           
      <div class="form-group">
	   {!! Form::label('description ' ,'Description:',['class'=>'col-lg-2 control-label']) !!}
			<div class="col-lg-10">

    	{!! Form::textarea('description',null,['class'=>'form-control']) !!}
		   </div>
		   </div>


		  
			
            <div class="pull-right">
                {{ Form::submit(trans('save'), ['class' => 'btn btn-primary btn-3x']) }}
            </div>
		</div>
	</div>
</div>

@endsection