@extends('backend.layouts.app')

  @section('content')

   <div class="box box-primary">
            <div class="box-header with-border">
                <h1 class="box-title">

              Blog
                </h1>
</div>


            <a name="add" href="{!! url('admin/blog/create') !!}"><i class="fa fa-plus-circle fa-2x"></i> </a>



    </div>



    <div class="table-responsive">
                <table id="users-table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $index = 0;?>

      @foreach($blog as $row)




                        <tr>
                            <td>{!! ++$index !!}</td>
                            <td>{!! $row->title !!}</td>
                            <td>{!! str_limit($row->description, 100) !!}</td>
                             <td>
                              <a href="{{url('/blog',$row->id)}}">
                                <img src="{!! url('uploads/'.$row->image)!!}" style="width:150px; height:150px;"></a>
                                <td>


                            <td>{!! link_to_route('admin.blog.edit', '', array($row->id),
                            array('class' => 'fa fa-pencil fa-fw','style'=>'float: left;
    ')) !!}
                                {!! Form::open(['method' => 'DELETE','route' => ['admin.blog.delete', $row->id]]) !!}
                                {{ Form::button('<span class="fa fa-trash fa-fw"></span>', array(
        'class'=>'btn','type'=>'submit','style'=>'background:white;padding: inherit; float: left;')) }}
                                {!! Form::close() !!}



                            </td>
                        </tr>

        @endforeach
         {!! $blog->render() !!}
       </tbody>
                </table>

            </div><!--table-responsive-->
        </div><!-- /.box-body -->




@endsection