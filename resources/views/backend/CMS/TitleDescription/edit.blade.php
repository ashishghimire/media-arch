@extends('backend.layouts.app')

  @section('content')


    <head>
            <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

    </head>



 <div class="col-md-8">

     <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

        TitleDescription
                </h3>


            </div>
            <div class="box-body">
      {{ Form::model($data, ['route' => ['admin.titledescription.update', $data], 'class' => 'form-horizontal', 'role' => 'form','files'=>'true' ,'method' => 'PATCH']) }}

<div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.general.crud.add') }}</h3>


        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="col-lg-12">


                 <div class="form-group">
                    {{ Form::label('title','Title', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-8">
                        {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' => 'title']) }}
                    </div><!--col-lg-8-->
                      @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
                </div>




           <div class="form-group">
                         {{ Form::label('description', 'Description', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-8">
                        {{ Form::textarea('description', NULL, ['class' => 'form-control', 'placeholder' => 'description', 'id'=>'editor1']) }}
                    </div>
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


<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>

@endsection