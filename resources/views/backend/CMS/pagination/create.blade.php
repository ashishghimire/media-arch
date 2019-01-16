@extends('backend.layouts.app')


	@section('content')
	  <div class="col-md-8">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              Pagination
                </h3>


            </div>
            <div class="box-body">		
  		<form method="POST" action="{{route('pagination.store')}}" enctype="multipart/form-data">
				{{csrf_field()}}
           <div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" class="form-control">
			</div>
           
           <div class="form-group">
			<label for="per_page">Per Page</label>
			<input type="text" name="per_page" class="form-control">
           </div>
			<input type="submit" name="SUBMIT">
			</form>
		</div>
	</div>
</div>


@endsection