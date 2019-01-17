@extends('backend.layouts.app')
	@section('content')
 <div class="col-md-8">

	 <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              Social
                </h3>


            </div>
            <div class="box-body">		
  		<form method="POST" action="{{route('social.store')}}" enctype="multipart/form-data">
				{{csrf_field()}}







			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-facebook-official fa-2x"></i></span>
                <input type="text" class="form-control" placeholder="Enter facebook url">
              </div>

			
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-twitter-square fa-2x"></i></span>
                <input type="text" class="form-control" placeholder="Enter twitter url">
              </div>

			

			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-google-plus-square fa-2x"></i></span>
                <input type="text" class="form-control" placeholder="Enter google plus url">
              </div>



			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-linkedin-square fa-2x"></i></span>
                <input type="text" class="form-control" placeholder="Enter linkedin url">
              </div>

				
				
           

			
      
        	<input type="submit" name="SUBMIT">
			</form>
		</div>
	</div>
</div>

@endsection