@extends('backend.layouts.app')
	@section('content')

		 <div class="col-md-8">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              Dynamic Menu
                </h3>


            </div>
            <div class="box-body">		
  		<form method="POST" action="{{route('dynamicmenu.store')}}" enctype="multipart/form-data">
				{{csrf_field()}}
           <div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" class="form-control">
			</div>
              <div class="form-group">
			<label for="slug">Slug</label>
			<input type="text" name="slug" class="form-control">
			</div>

			 <div class="form-group">
			
			<label for="logo">Logo</label>
			<input type="file" name="logo" accept=".jpg,.png,.JPEG,.bmp,." class="form-control">
           </div>
           
           <div class="form-group">
			<label for="location">location</label>
			<input type="text" name="location" class="form-control">
           </div>
           <div class="form-group">	
			<label for="url">Url</label>
			<input type="text" name="url" class="form-control">
			</div>
			<input type="submit" name="SUBMIT">
			</form>
		</div>
	</div>
</div>
	

@endsection