@extends('backend.layouts.app')

  @section('content')






 <div class="col-md-8">

     <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

          About
                </h3>


            </div>
            <div class="box-body">
      {{ Form::model($data, ['route' => ['admin.about.update', $data], 'class' => 'form-horizontal', 'role' => 'form','files'=>'true' ,'method' => 'PATCH']) }}

<div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.general.crud.add') }}</h3>


        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="col-lg-12">


                 <div class="form-group">
                    {{ Form::label('title',

                    'Title', ['class' => 'col-lg-4 control-label']) }}

                    <div class="col-lg-8">
                        {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' => 'title']) }}

            </div>
             @if ($errors->has('')) <p class="help-block">{{ $errors->first('titletitle') }}</p> @endif
                    </div><!--col-lg-8-->
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
                       <option name="" value="icon-custom icon-lg icon-bg-u rounded-x fa fa-lightbulb-o
                    "><i class="fa fa-twitter fa-4x"></i>Blub</option>

                    </select>
                </div>
            </div>
                </div>


                <!--form control-->
                <div class="form-group">
                    {{ Form::label('description','description', ['class' => 'col-lg-4 control-label']) }}


                    <div class="col-lg-8">
                        {{ Form::textarea('description', NULL, ['class' => 'form-control','id'=>'editor1']) }}
                    </div><!--col-lg-8-->
                    @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
            </div>


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