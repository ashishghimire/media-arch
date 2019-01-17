@extends('backend.layouts.app')

  @section('content')

   <div class="box box-primary">
            <div class="box-header with-border">
                <h1 class="box-title">

        Team
                </h1>
</div>


            <a name="add" href="{!! url('admin/team/create') !!}"><i class="fa fa-plus-circle fa-2x"></i> </a>



    </div>



    <div class="table-responsive">
                <table id="users-table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Description</th>
                        <th>Image</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $index = 0;?>

      @foreach($data as $row)




                        <tr>
                            <td>{!! ++$index !!}</td>
                            <td>{!! $row->name !!}</td>
                            <td>{!! $row->position !!}</td>
                            <td>{!! str_limit($row->description, 100) !!}</td>
                             <td>
                              <a href="{{url('/team',$row->id)}}">
                                <img src="{!! url('uploads/'.$row->image)!!}" style="width:150px; height:150px;"></a>
                                <td>


                            <td>{!! link_to_route('admin.team.edit', '', array($row->id),
                            array('class' => 'fa fa-pencil fa-fw','style'=>'float: left;')) !!}


                                {!! Form::open(['method' => 'DELETE','route' => ['admin.team.delete', $row->id]]) !!}
                                {{ Form::button('<span class="fa fa-trash fa-fw"></span>', array(
        'class'=>'btn','type'=>'submit','style'=>'background:white;padding: inherit; float: left;')) }}
                                {!! Form::close() !!}



                            </td>
                        </tr>

        @endforeach

       </tbody>
                </table>

            </div><!--table-responsive-->
        </div><!-- /.box-body -->


@endsection