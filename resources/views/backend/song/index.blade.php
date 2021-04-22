@extends('layouts.backend')

@section('content')
  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Song Management
            <small>List of Song</small>
        </h1>
        {{-- <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Blank Page
            </li>
        </ol> --}}
    </div>
    
    <div class="col-lg-12">

        <div class="block-button">
            <a type="button" href = "{{route('song.create')}}"class="btn btn-info btn-md">ADD SONG</a>
        </div>
        
        <table class="table table-bordered" id="table" style="margin-top: 10px">
            <thead>
                <tr>
                    <td> Title  </td>
                    <td> Author </td>
                    <td> Created </td>
                    <td> Action </td>

                </tr>
            </thead>

            <tbody>
                @foreach ($model as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{$item->author}}</td>
                        <td>{{$item->created_at->diffForHumans()}}</td>
                        <td>
                          
                            <form action="{{ route('song.destroy',$item->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <a type="button" href="{{route('song.edit',$item->id)}}" class="btn btn-warning btn-xs">EDIT</a>
                                <a type="button" href="{{route('song.show',$item->id)}}" class="btn btn-primary btn-xs">SHOW</a>
    
                                <button type="submit" class="btn btn-danger btn-xs">DELETE</button>
                            </form>
                            
                        </td>
                @endforeach
            </tbody>
        </table>

    </div>

</div>
<!-- /.row -->


@push('after-styles')

<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    
<style>
    .block-button{

        padding-bottom: 10px;
    }
</style>
@endpush

@push('after-scripts')

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js" ></script>

<script>
    $(document).ready(function() {
    $('#table').DataTable();
} );

</script>
    
@endpush
    
@endsection

