@extends('backend.layouts.app')


	@section('content')
 <div class="col-md-8">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              map
                </h3>


            </div>
            <div class="box-body">		
  		<form method="POST" action="{{route('map.store')}}" enctype="multipart/form-data">
				{{csrf_field()}}
           <div class="form-group">
			<label for="title">Latitude</label>
			<input type="text" name="latitude" class="form-control">
			</div>
           
           <div class="form-group">
			<label for="title">Longitude</label>
			<input type="text" name="longitude" class="form-control">
			</div>
           
           
           <div class="form-group">
			<label for="key">Key</label>
			<input type="text" name="key" class="form-control">
           </div>
           <input type="submit" name="SUBMIT">
			</form>
		</div>
	</div>
</div>

@endsection