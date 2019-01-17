@extends('backend.layouts.app')

	@section('content')
 <div class="col-md-8">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

              Dynamic Header
                </h3>


            </div>
            <div class="box-body">
  		<form method="POST" action="{{route('admin.header.store')}}" enctype="multipart/form-data">
				{{csrf_field()}}
           <div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" class="form-control">
			</div>

           <div class="form-group">

			<label for="logo">Logo</label>
			<input type="file" name="logo" accept=".jpg,.png,.JPEG,.bmp,." class="form-control">
           </div>

           <div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" placeholder="Describe ..." class="form-control"></textarea>
		   </div>
           <div class="form-group">
			<label for="position">Position</label>
			<input type="text" name="position" class="form-control">
           </div>
           <div class="form-group">
			<label for="css">CSS</label>
			<input type="text" name="css" class="form-control">
			</div>
			<input type="submit" name="SUBMIT">
			</form>
		</div>
	</div>
</div>

@endsection