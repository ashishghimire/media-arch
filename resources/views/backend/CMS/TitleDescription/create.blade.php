@extends ('backend.layouts.app')
	@section('content')



 <div class="col-md-6">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

              TitleDescription
                </h3>


            </div>
            <div class="box-body">
  		<form method="POST" action="{{route('admin.titledescription.store')}}" enctype="multipart/form-data">
		{{csrf_field()}}

           <div class="form-group  @if ($errors->has('title')) has-error @endif">
			<label for="title">Title</label>
			<input type="text" name="title" class="form-control">
      @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
			</div>


           <div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" id="editor1" class="form-control"></textarea>
        @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif

		   </div>

           			{{ Form::submit(trans('submit'), ['class' => 'btn btn-primary btn-3x']) }}
			</form>
		</div>
	</div>
</div>





<div class="col-md-6">
       <div class="box box-primary">
              <div class="box-header with-border">
                <h1 class="box-title">

                  Title description
                </h1>
              </div>
        </div>



    <div class="table-responsive">
                <table id="users-table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Description</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php $index = 0;?>

      @foreach($data as $row)




                        <tr>
                            <td>{!! ++$index !!}</td>
                            <td>{!! $row->title !!}</td>
                            <td>{!! str_limit($row->description, 100) !!}</td>


<td> {!! link_to_route('admin.titledescription.edit', '', array($row->id),


                                   array('class' => 'fa fa-pencil fa-fw','style'=>'float: left;
    ')) !!}
                                {!! Form::open(['method' => 'DELETE','route' => ['admin.titledescription.delete', $row->id]]) !!}
                                {{ Form::button('<span class="fa fa-trash fa-fw"></span>', array(
        'class'=>'btn','type'=>'submit','style'=>'background:white;padding: inherit; float: left;')) }}
                                {!! Form::close() !!}



                            </td>
                        </tr>

        @endforeach
         {!! $data->render() !!}
       </tbody>
                </table>

            </div><!--table-responsive-->




        </div><!-- /.box-body -->




@endsection