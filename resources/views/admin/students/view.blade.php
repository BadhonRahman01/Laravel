@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <a href="{{ route('create.index') }}" class="btn btn bg-primary">All Class</a>    
            <div class="card-header">{{ __('Students Details') }}
                <a href=" {{ route('students.index') }}  "> </a>
            </div>



                <div class="card-body">
                <ul class="list">
                    <!-- <li class="list-item">Name: {{ $student->name}} </li>
                    <li class="list-item">Class: {{ $student->class_id}} </li>
                    <li class="list-item">Roll: {{ $student->roll}} </li>
                    <li class="list-item">Phone: {{ $student->phone}}</li>
                    <li class="list-item"> Email: {{ $student->email}}</li> -->
                    <li class="list-item">Name: {{ $student}}
                </ul>


                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
