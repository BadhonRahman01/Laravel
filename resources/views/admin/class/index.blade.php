@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Class') }}</div>



                <div class="card-body">
                <a href=" {{ route('create.class') }}" class="btn btn bg-primary">Add new</a>
                    <table class="table table-responsive"> 
                    <thead>
                        <tr> 
                        <td> Serial Number</td>
                        <td> Class Name</td>
                        <td> Action</td>
                        </tr>
                    </thead>
                    <tbody> <tr>
                        @foreach($class as $key=>$row)
                        <td>{{ ++$key}}</td>
                        <td>{{ $row->class_name}}</td>
                        <td><a href="" class="btn btn-dark">Edit </a></td>
                        <td><a href="{{ route('class.delete', $row->id)}}" class="btn btn-danger">Delete </a></td>
                        </tr>
                    @endforeach
                    </tbody>


                        </table>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
