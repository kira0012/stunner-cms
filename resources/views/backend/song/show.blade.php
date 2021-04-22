@extends('layouts.backend')

@section('content')
  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Song Management
            <small>Show Song Page</small>
        </h1>
    
    </div>

    <div class="col-lg-12">
       
        <div class="container">
            <h2>{{$model->title}}</h2>
            <small>{{$model->author}}</small>
                <p>  
                    {{$model->lyrics}}
                 </p>
            
        </div>
      
   

    </div>
</div>
<!-- /.row -->

    
@endsection