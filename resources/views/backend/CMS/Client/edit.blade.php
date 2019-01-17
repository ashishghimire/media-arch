@extends('backend.layouts.app')

  @section('content')






 <div class="col-md-8">

     <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

              client
                </h3>


            </div>
            <div class="box-body">
      {{ Form::model($data, ['route' => ['admin.client.update', $data], 'class' => 'form-horizontal', 'role' => 'form','files'=>'true' ,'method' => 'PATCH']) }}

<div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.general.crud.add') }}</h3>


        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="col-lg-6">


            <div class="form-group">
                 {{ Form::label('image','Image', ['class' => 'col-lg-4 control-label']) }}

               <div class="col-lg-8">
                    {{ Form::file('image', NULL, ['class' => 'form-control',  'placeholder' =>'Enter the image']) }}
                </div><!--col-lg-10-->
                 @if ($errors->has('image')) <p class="help-block">{{ $errors->first('image') }}</p> @endif
            </div><!--form control-->



        </div><!-- /.box-body -->
    </div><!--box-->

    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ Form::submit(trans('buttons.general.save'), ['class' => 'btn btn-success btn-xs']) }}

            </div><!--pull-left-->



            <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div><!--box-->



    {{ Form::close() }}
        </div>
    </div>
</div>

@endsection