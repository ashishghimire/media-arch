@extends('backend.layouts.app')

  @section('content')

    <head>
            <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

    </head>




 <div class="col-md-8">

     <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

              Blog
                </h3>


            </div>
            <div class="box-body">
      {{ Form::model($blog, ['route' => ['admin.blog.update', $blog], 'class' => 'form-horizontal', 'role' => 'form','files'=>'true' ,'method' => 'PATCH']) }}

<div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.general.crud.add') }}</h3>


        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="col-lg-12">


                 <div class="form-group">
                    {{ Form::label('title',

                    'Title', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' => 'title']) }}
                    </div><!--col-lg-8-->
                     @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
                </div>

                <!--form control-->
                <div class="form-group">
                    {{ Form::label('description','Description', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-12">
                        {{ Form::textarea('description', NULL, ['class' => 'form-control', 'id'=>'editor1','placeholder'=> 'description']) }}
                    </div><!--col-lg-8-->
                     @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif


            </div>

            <div class="form-group">
                 {{ Form::label('image','Image', ['class' => 'col-lg-2 control-label']) }}

               <div class="col-lg-10">
                    {{ Form::file('image', NULL, ['class' => 'form-control',  'placeholder' =>'image']) }}
                </div><!--col-lg-10-->
                 @if ($errors->has('image')) <p class="help-block">{{ $errors->first('image') }}</p> @endif
            </div><!--form control-->

            <div class="form-group">
            <label class="col-lg-4"> Category:</label>
            <div class="col-lg-10">
                {!!Form::select('category_id',$category_id)!!}


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
</div>


<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>

@endsection