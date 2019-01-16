<?php
/**
 * Created by PhpStorm.
 * User: sabin
 * Date: 5/15/17
 * Time: 12:46 PM
 */
?>
@extends('backend.layouts.app')
@section('after-styles')
    <LINK href="{!! url('dropzone/min/dropzone.min.css') !!}" rel="stylesheet" type="text/css">
    <LINK href="{!! url('css/prettyPhoto.css') !!}" rel="stylesheet" type="text/css"
    <LINK href="{!! url('css/mine.css') !!}" rel="stylesheet" type="text/css">


@endsection
@section('page-header')
    <h1>
        {{ app_name() }}
        <small>{{ trans('strings.backend.folder.title') }}</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-9">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">
                    @if($parent !== '')

                        <a href="{!! url('admin/file_by_album/'.$parent[0]->id) !!}"> {!! $parent[0]->title !!}</a> >
                    @endif

                    <a
                            href="{!! url('admin/file_by_album/'.$album->id) !!}">{!! $album->title !!}</a></h3>
                <small>
                    ({!! $album->file()->count() !!})
                </small>

                <div class="box-tools pull-right">
                    <div class="pull-right mb-10 hidden-sm hidden-xs">
                        {{--{{ link_to_route('admin.album.photo.slideshow', trans('menus.backend.album.slideshow'), [$album->id], ['class' => 'btn btn-success btn-xs']) }}--}}
                        {{ link_to_route('admin.album.file.create', trans('menus.backend.album.create'), [$album->id], ['class' => 'btn btn-success btn-xs']) }}

                    </div><!--box-tools pull-right-->
                </div><!-- /.box-header -->
            </div>
            <div class="box-body">
                <div class="col-md-12">
                    @foreach($albumgroup as $album_photo)
                        <div class="col-md-3"
                             style="background: sandybrown; padding: 10px 20px 10px 20px; margin:10px 20px 10px 30px; ">
                            <a href="{!! url('admin/file_by_album',$album_photo->id) !!}">{!! $album_photo->title !!}</a>
                            &nbsp;
                            <small>({!! $album_photo->photo()->count() !!})
                            </small>
                            {!! link_to_route('admin.file.editFileByAlbum', '', array($album_photo->id,2),
                                                array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                            {!! Form::open(['method' => 'DELETE','route' => ['admin.album.delete', $album_photo->id]]) !!}


                            {{ Form::button('<span class="fa fa-trash-o fa-fw"></span>', array(
'class'=>'','type'=>'submit')) }}

                            {!! Form::close() !!}
                        </div>
                    @endforeach

                </div>


                <div class="col-md-12">

                    <hr>
                    <div class="table-responsive">
                        <table id="users-table" class="table table-condensed table-hover">
                            <thead>
                            <tr>
                                <th>{{ trans('labels.backend.album.table.sn') }}</th>
                                <th>{{ trans('labels.backend.album.table.title') }}</th>
                                <th>{{ trans('labels.backend.album.table.description') }}</th>
                                <th>{{ trans('labels.backend.album.table.size') }}</th>
                                <th>{{ trans('labels.backend.album.table.date') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $index = 0;?>
                            @foreach($data as $file)
                                <tr>
                                    <td>{!! ++$index !!}</td>
                                    <td>
                                        <a href="{!! url('uploads/file/'.$file->image) !!}">{!! $file->title !!}</a>

                                    </td>
                                    <td>{!! $file->description !!}</td>
                                    <td>
                                        <?php
                                        if ($file->size >= 1073741824) {
                                            echo $bytes = number_format($file->size / 1073741824 , 2) . ' GB';
                                        } elseif ($file->size >= 1048576) {
                                            echo $bytes = number_format($file->size / 1048576 , 2) . ' MB';
                                        } elseif ($file->size >= 1024) {
                                            echo $bytes = number_format($file->size / 1024 , 2) . ' KB';
                                        } elseif ($file->size > 1) {
                                            echo $bytes = $file->size . ' bytes';
                                        } elseif ($file->size == 1) {
                                            echo $bytes = $file->size . ' byte';
                                        } else {
                                            echo $bytes = '0 bytes';
                                        }



                                        ?>


                                    </td>
                                    <td>{!! $file->created_at !!}</td>
                                    <td class="col-md-1">  {!! link_to_route('admin.file.edit', 'edit', array($file->id,$file->type),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                        {!! Form::open(['method' => 'DELETE','route' => ['admin.file.delete', $file->id]]) !!}
                                        {{ Form::button('<span class="fa fa-trash-o fa-fw"></span>delete', array(
            'class'=>'btn','type'=>'submit')) }}

                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        @if(isset($model))
            {!! Form::model($model, ['method' => 'PATCH', 'class' => 'form-horizontal','files' => TRUE, 'route' => ['admin.album.update', $model->id]]) !!}
        @else

            {{ Form::open(['route' => 'admin.album.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) }}
        @endif
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">
                    @if(isset($model))

                        Edit Folder
                    @else
                        Add Folder
                    @endif

                </h3>

            </div>
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

                {!! Form::hidden('status',1) !!}

                {!! Form::hidden('album_id',$album->album_id) !!}

                {!! Form::hidden('type',2) !!}
                {!! Form::hidden('user_id',\Illuminate\Support\Facades\Auth::User()->id) !!}
            </div>
        </div>
        <div class="box box-info">
            <div class="box-body">
                <div class="pull-left">
                    {{ link_to_route('admin.album.type', trans('buttons.general.cancel'), 1, ['class' => 'btn
                    btn-danger
                    btn-xs']) }}
                </div><!--pull-left-->

                <div class="pull-right">
                    {{ Form::submit(trans('buttons.general.save'), ['class' => 'btn btn-success btn-xs']) }}
                </div><!--pull-right-->

                <div class="clearfix"></div>
            </div><!-- /.box-body -->
        </div><!--box-->
        {!! Form::close() !!}
    </div>

@endsection
@section('after-scripts')


    <script src="{!! url('js/jquery-1.12.4.min.js') !!}"></script>
    <script src="{!! url('js/jquery.prettyPhoto.js') !!}"></script>
    <script type="text/javascript" charset="utf-8">


        $("area[rel^='prettyPhoto']").prettyPhoto();

        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'normal',
            theme: 'light_square',
            slideshow: 3000,
            autoplay_slideshow: true
        });
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'fast',
            slideshow: 10000,
            hideflash: true
        });


    </script>


@endsection