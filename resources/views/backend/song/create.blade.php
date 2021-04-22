@extends('layouts.backend')

@section('content')
  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Song Management
            <small>Create Song Page</small>
        </h1>
      



    </div>

    <div class="col-lg-12">
        <form method="POST" action="/song">  
            @csrf
            @method('POST')
            
            @include('backend.song.partials.fields')
            
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
   

    </div>
</div>
<!-- /.row -->

    
@endsection