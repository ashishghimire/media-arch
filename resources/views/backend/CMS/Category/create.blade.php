@extends('backend.layouts.app')


	@section('content')
 <div class="col-md-6">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

              category
                </h3>


            </div>
            <div class="box-body">
  		<form method="POST" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
				{{csrf_field()}}
           <div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" class="form-control">
			</div>






            <div class="pull-right">
                {{ Form::submit(trans('save'), ['class' => 'btn btn-primary btn-3x']) }}
            </div><!--pull-right-->
			</form>
		</div>
	</div>
</div>



<div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                <a href="{!! url('admin/category/create') !!}" class="btn btn-primary">add</a>
              category
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>

                            <th>Title</th>





                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>


                                <td><a href="{{url('showblogbycategory',$field->id)}}">{!! $field->title !!}</a></td>






                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>




@endsection