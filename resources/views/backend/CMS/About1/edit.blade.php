@extends('backend.layouts.app')

  @section('content')






 <div class="col-md-8">

     <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

          About1
                </h3>


            </div>
            <div class="box-body">
      {{ Form::model($data, ['route' => ['admin.about1.update', $data], 'class' => 'form-horizontal', 'role' => 'form','files'=>'true' ,'method' => 'PATCH']) }}

<div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.general.crud.add') }}</h3>


        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="col-lg-12">


                 <div class="form-group">
                    {{ Form::label('title',

                    'Name', ['class' => 'col-lg-4 control-label']) }}

                    <div class="col-lg-8">
                        {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' => 'title']) }}
                    </div><!--col-lg-8-->
                     @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
                </div>

                 <div class="form-group">
                    {{ Form::label('icon',

                    'Icon', ['class' => 'col-lg-4 control-label']) }}

                    <div class="col-lg-8">
                        {{ Form::text('icon', NULL, ['class' => 'form-control', 'placeholder' => 'icon']) }}
                    </div><!--col-lg-8-->
                     @if ($errors->has('icon')) <p class="help-block">{{ $errors->first('icon') }}</p> @endif
                </div>



                <!--form control-->
                <div class="form-group">
                    {{ Form::label('description','description', ['class' => 'col-lg-4 control-label']) }}

                    <div class="col-lg-8">
                        {{ Form::textarea('description', NULL, ['class' => 'form-control','id'=>'editor1']) }}
                    </div><!--col-lg-8-->
                     @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif


            </div>

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