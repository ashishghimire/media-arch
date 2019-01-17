<?php
    /**
     * Created by PhpStorm.
     * User: sabin
     * Date: 5/15/17
     * Time: 12:46 PM
     */
?>
@extends('backend.layouts.app')

@section('page-header')
    <h1>
        {{ app_name() }}
        <small>{{ trans('strings.backend.album.title') }}</small>
    </h1>
@endsection
@section('content')
    {{ Form::model($model, ['route' => ['admin.photo.update', $model], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH']) }}

    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.photo.title') }}</h3>


        </div><!-- /.box-header -->

        <div class="box-body">

            <div class="form-group">
                {{ Form::label('title', trans('validation.attributes.backend.album.title'), ['class' => 'col-lg-3 control-label']) }}

                <div class="col-lg-9">
                    {{ Form::text('title', NULL, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.backend.album.title')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('description', trans('validation.attributes.backend.album.description'),
                 ['class' => 'col-lg-3 control-label']) }}

                <div class="col-lg-9">
                    {{ Form::text('description', NULL, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.album.description')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
            <div class="form-group">
                {{ Form::label('description', trans('validation.attributes.backend.photo.album'),
                 ['class' => 'col-lg-3 control-label']) }}

                <div class="col-lg-9">
                    {!! Form::select('album_id',$album,NULL,array('id'=>'category_id','class'=>'form-control')) !!}

                </div><!--col-lg-10-->
            </div><!--form control-->
            <div class="form-group">
                {{ Form::label('description', trans('validation.attributes.backend.photo.image'),
                 ['class' => 'col-lg-3 control-label']) }}
                <div class="col-lg-9">
                    {!! Form::file('image_file',NULL,array('class'=>'form-control','id'=>'file_uploader')) !!}
                    {!! Form::text('image',NULL,array('class'=>'form-control','id'=> 'file-name','disabled'=>"disabled")) !!}
                </div>
            </div>
            {!! Form::hidden('status',1) !!}
            {!! Form::hidden('user_id',\Illuminate\Support\Facades\Auth::User()->id) !!}
        </div>

        <div class="box box-info">
            <div class="box-body">
                <div class="pull-left">
                    {{ link_to_route('admin.photo.show', trans('buttons.general.cancel'), [$album_id], ['class' => 'btn btn-danger btn-xs']) }}
                </div><!--pull-left-->

                <div class="pull-right">
                    {{ Form::submit(trans('buttons.general.save'), ['class' => 'btn btn-success btn-xs']) }}
                </div><!--pull-right-->

                <div class="clearfix"></div>
            </div><!-- /.box-body -->
        </div><!--box-->
    </div><!--box-->
    </div><!--box-->
    {!! Form::close() !!}


@endsection


