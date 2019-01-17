@extends('backend.layouts.app')

@section('content')
    
   <div class="box box-primary">
            <div class="box-header with-border">
                <h1 class="box-title">
            
              Page
                </h1>
</div>


            <a name="add" href="{!! url('page/create') !!}"><i class="fa fa-plus-circle fa-2x"></i> </a>

          

</div>

           
    <div class="w3ls">
      @foreach($page as $row)
        <div class="col-md-6 w3ls-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
           <div class="tc-ch">
            <div class="tch-img">
              
            </div>
          
            <h3><a href="{{url('/page',$row->id)}}">{{$row->title}}</a></h3>
              <p> {{$row->description}}</p>
            <h6>Created at:<a href="#"></a>   {{$row->created_at->format('d-m-Y')}}</h6>
        
              
            
          </div>
        </div>
        @endforeach
         {!! $page->render() !!}
      </div>
            



   











    
 
@endsection