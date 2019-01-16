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

        <small>
            @if(Request::segment(3)=='1')
                {{ trans('strings.backend.album.title') }}
            @else
                {{ trans('strings.backend.folder.title') }}

            @endif
        </small>
    </h1>
@endsection
@section('content')
    <div class="col-md-7">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">
                    @if(Request::segment(3)=='1')
                        {{ trans('labels.backend.album.title') }}
                    @else
                        {{ trans('labels.backend.folder.title') }}

                    @endif

                </h3><span>({!! $count !!})</span>


            </div>
            <div class="box-body">
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
                        @foreach($data as $album)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                <td>

                                    @if(Request::segment(3)=='1')
                                        <a href="{!! url('admin/photo_by_album',$album->id) !!}">{!! $album->title !!}</a>
                                        &nbsp;
                                        <small>({!! $album->photo()->count() !!})
                                        </small>
                                    @else
                                        <a href="{!! url('admin/file_by_album',$album->id) !!}">{!! $album->title !!}</a>
                                        &nbsp;
                                        <small>({!! $album->file()->count() !!})
                                    @endif

                                </td>
                                <td>{!! $album->description !!}</td>
                                <td>
                                    @if(Request::segment(3)=='1')

                                        <?php $fileSize = $photo->sumOfPhotoSize($album->id);?>





                                        <?php
                                        if ($fileSize >= 1073741824) {
                                            echo $bytes = number_format($fileSize / 1073741824 , 2) . ' GB';
                                        } elseif ($fileSize >= 1048576) {
                                            echo $bytes = number_format($fileSize / 1048576 , 2) . ' MB';
                                        } elseif ($fileSize >= 1024) {
                                            echo $bytes = number_format($fileSize / 1024 , 2) . ' KB';
                                        } elseif ($fileSize > 1) {
                                            echo $bytes = $fileSize . ' bytes';
                                        } elseif ($fileSize == 1) {
                                            echo $bytes = $fileSize . ' byte';
                                        } else {
                                            echo $bytes = '0 bytes';
                                        }



                                        ?>
                                    @else
                                        <?php $fileSize = $file->sumOfFileSize($album->id);?>

                                        <?php
                                        if ($fileSize >= 1073741824) {
                                            echo $bytes = number_format($fileSize / 1073741824 , 2) . ' GB';
                                        } elseif ($fileSize >= 1048576) {
                                            echo $bytes = number_format($fileSize / 1048576 , 2) . ' MB';
                                        } elseif ($fileSize >= 1024) {
                                            echo $bytes = number_format($fileSize / 1024 , 2) . ' KB';
                                        } elseif ($fileSize > 1) {
                                            echo $bytes = $fileSize . ' bytes';
                                        } elseif ($fileSize == 1) {
                                            echo $bytes = $fileSize . ' byte';
                                        } else {
                                            echo $bytes = '0 bytes';
                                        }
                                        ?>

                                    @endif

                                </td>
                                <td>{!! date('Y-m-d', strtotime($album->created_at))!!}</td>
                                <td class="col-md-1">  {!! link_to_route('admin.album.edit', '', array($album->id,Request::segment(3)),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    {!! Form::open(['method' => 'DELETE','route' => ['admin.album.delete', $album->id]]) !!}


                                    {{ Form::button('<span class="fa fa-trash-o fa-fw"></span>', array(
        'class'=>'','type'=>'submit')) }}

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
    <div class="col-md-5">
        @if(isset($model))
            {!! Form::model($model, ['method' => 'PATCH', 'class' => 'form-horizontal','files' => TRUE, 'route' => ['admin.album.update', $model->id]]) !!}
        @else

            {{ Form::open(['route' => 'admin.album.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) }}
        @endif
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">
                    @if(isset($model))
                        @if(Request::segment(3)=='1')
                            Edit Album
                        @else
                            Edit Folder

                        @endif

                    @else
                        @if(Request::segment(3)=='1')
                            Add Album
                        @else
                            Add Folder
                        @endif
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

                {!! Form::hidden('type',Request::segment(3)) !!}
                {!! Form::hidden('user_id',\Illuminate\Support\Facades\Auth::User()->id) !!}
            </div>
        </div>
        <div class="box box-info">
            <div class="box-body">
                <div class="pull-left">
                    {{ link_to_route('admin.album.type', trans('buttons.general.cancel'), 1, ['class' => 'btn btn-danger btn-xs']) }}
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


