@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Students') }}</div>



                <div class="card-body">
                @if(session()->has('success'))
    <strong> {{ session()->get('success')}}</strong>
@endif
                <a href="{{ route('students.create')}}" class="btn btn bg-primary">Add new Students</a>
                    <table class="table table-responsive"> 
                    <thead>
                        <tr> 
                        <td> Serial Number</td>
                        <td> Roll</td>
                        <td> Name</td>
                        <td> Phone</td>
                        <td> Class Name</td>
                        <td> Action</td>
                        </tr>
                    </thead>
                    <tbody> <tr>
                        @foreach($students as $key=>$row)
                        <td>{{ ++$key}}</td>
                        <td>{{ $row->roll}}</td>
                        <td>{{ $row->name}}</td>
                        <td>{{ $row->phone}}</td>
                        <td>{{ $row->class_id}}</td>
                        <td><a href="{{ route('students.show', $row->id)}}" class="btn btn-dark">View </a></td>
                        <td><a href="{{ route('students.edit', $row->id)}}" class="btn btn-dark">Edit </a></td>
                        <td> <from action="{{ route('students.destroy'), $row->id  }}" method="post">
                            @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete </button></td>
                            </from>
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
