@extends('backend.layouts.app')

  @section('content')






 <div class="col-md-8">

     <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

              Team
                </h3>


            </div>
            <div class="box-body">
      {{ Form::model($data, ['route' => ['admin.portfolio.update', $data], 'class' => 'form-horizontal', 'role' => 'form','files'=>'true' ,'method' => 'PATCH']) }}

<div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.general.crud.add') }}</h3>


        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="col-lg-6">


                 <div class="form-group">
                    {{ Form::label('name',

                    'Name', ['class' => 'col-lg-4 control-label']) }}

                    <div class="col-lg-8">
                        {{ Form::text('name', NULL, ['class' => 'form-control', 'placeholder' => 'name']) }}
                    </div><!--col-lg-8-->
                     @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                </div>

                 <div class="form-group">
                    {{ Form::label('position',

                    'Position', ['class' => 'col-lg-4 control-label']) }}

                    <div class="col-lg-8">
                        {{ Form::text('position', NULL, ['class' => 'form-control', 'placeholder' => 'position']) }}
                    </div><!--col-lg-8-->
                     @if ($errors->has('position')) <p class="help-block">{{ $errors->first('position') }}</p> @endif
                </div>

                <!--form control-->
                <div class="form-group">
                    {{ Form::label('description','description', ['class' => 'col-lg-4 control-label']) }}

                    <div class="col-lg-8">
                        {{ Form::text('description', NULL, ['class' => 'form-control','id'=>'editor1', 'placeholder' => 'description']) }}
                    </div><!--col-lg-8-->
                      @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif



            </div>

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