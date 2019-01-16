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
        <small>{{ trans('strings.backend.photo.title') }}</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-9">


        <div class="box box-success">

            <div class="box-header with-border">
                <h3 class="box-title">
                    @if($parent !== '')

                        <a href="{!! url('admin/photo_by_album/'.$parent[0]->id) !!}"> {!! $parent[0]->title !!}</a> >
                    @endif


                    {{--            @if( $parent== '')
            jkjlk
                                @elseif($parent =='' || $grandparent=='')
                                    hjghj
                                @elseif( $grandparent== '')
            hghjj
                                @else
                                    {!! $grandparent[0]->title !!} >
                                    {!! $parent[0]->title !!}
                                @endif
            --}}

                    <a href="{!! url('admin/photo_by_album/'.$album->id) !!}">  {!!  $album->title !!}</a></h3>
                <small>
                    ({!! $album->photo()->count()!!})
                </small>


                <div class="box-tools pull-right">
                    <div class="pull-right mb-10 hidden-sm hidden-xs">
                        {{--{{ link_to_route('admin.album.photo.slideshow', trans('menus.backend.album.slideshow'), [$album->id], ['class' => 'btn btn-success btn-xs']) }}--}}
                        {{ link_to_route('admin.album.photo.create', trans('menus.backend.album.create'), [$album->id], ['class' => 'btn btn-success btn-xs']) }}

                    </div><!--box-tools pull-right-->
                </div><!-- /.box-header -->
            </div>
            <div class="box-body">
                <div class="row">
                    <div id="main">
                        <div class="col-md-12">
                            @foreach($albumgroup as $album_photo)
                                <div class="col-md-3"
                                     style="background: sandybrown; padding: 10px 20px 10px 20px; margin:10px 20px 10px 30px; ">
                                    <a href="{!! url('admin/photo_by_album',$album_photo->id) !!}">{!! $album_photo->title !!}</a>
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
                            @foreach($data as $photo)
                                <div class="col-md-4">

                                    <div class="thumbnail">
                                        <span class="roll"></span>
                                        <div class="gallery clearfix">
                                            <a href="{!! url('uploads/photo/'.$photo->image) !!}"
                                               rel="prettyPhoto[gallery2]"
                                               title="{!! $photo->title !!}"><img
                                                        src="{!! url('uploads/photo/thumbnail/'.$photo->image) !!}"
                                                        class="action"
                                                        alt=""/>


                                            </a>

                                            <div class="row titlecaption">
                                                <div class="col-md-12 ">
                                                    <center>
                                                        <h5><p>{!! substr($photo->title,0,20) !!}</p></h5>
                                                    </center>
                                                </div>
                                                <div class="caption">
                                                    <div class="col-md-6">
                                                        {!! link_to_route('admin.photo.edit', 'edit', array($photo->id),
                                                   array('class' => 'btn btn-primary  editbutton form-control')) !!}
                                                    </div>
                                                    <div class="col-md-6">
                                                        {!! Form::open(['method' => 'DELETE','route' => ['admin.photo.delete', $photo->id]]) !!}
                                                        {{ Form::button('<span class=""></span>delete', array('class'=>'btn btn-primary deletebutton pull-right form-control','type'=>'submit')) }}
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <center>
                        {!! $data->render() !!}
                    </center>


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

                        Edit Album


                    @else

                        Add Album

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

                {!! Form::hidden('album_id',$album->id) !!}

                {!! Form::hidden('type',1) !!}
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
