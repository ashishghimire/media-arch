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

    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{!! $album->title !!}</h3>
            <small>
                ({!! $album->photo()->count() !!})
            </small>

            <div class="box-tools pull-right">
                <div class="pull-right mb-10 hidden-sm hidden-xs">
                    {{ link_to_route('admin.album.photo.slideshow', trans('menus.backend.album.create'), [$album->id], ['class' => 'btn btn-success btn-xs']) }}
                    {{ link_to_route('admin.album.photo.create', trans('menus.backend.album.create'), [$album->id], ['class' => 'btn btn-success btn-xs']) }}

                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->
        </div>
        <div class="box-body">
            <div class="row">
                <div id="main">

                    @foreach($data as $photo)
                        {{-- $image = @ImageCreateFromJpeg($photo->image);
                         if (!$image)
                         {
                         $image= imagecreatefromstring(file_get_contents($image_name));
                         }--}}
                        <img src="{{ ImageManager::getImagePath(public_path() . '/uploads/photo/' . $photo->image, 250, 200, 'crop') }}"
                             alt="">

                        <div class="col-md-3">

                            <div class="thumbnail">
                                <span class="roll"></span>
                                <div class="gallery clearfix">
                                    <a href="{!! url('uploads/photo/'.$photo->image) !!}"
                                       rel="prettyPhoto[gallery2]"
                                       title="{!! $photo->description."<br><h6>".$photo->size."Bytes</h6>" !!}"><img
                                                src="{!! url('uploads/photo/250-200/crop/'.$photo->image) !!}"
                                                class="action"
                                                alt=""/>


                                    </a>

                                    <div class="row titlecaption">
                                        <div class="col-md-12 ">
                                            <center>
                                                <h5><p>{!! $photo->title !!}</p></h5>
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
                <center>
                    {!! $data->render() !!}
                </center>


            </div>
        </div>
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