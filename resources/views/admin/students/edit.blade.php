@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <a href="{{ route('create.index') }}" class="btn btn bg-primary">All Class</a>    
            <div class="card-header">{{ __('Update Student') }}
                <a href=" {{ route('students.index') }}  "> </a>
            </div>



                <div class="card-body">
                @if(session()->has('success'))
    <strong> {{ session()->get('success')}}</strong>
@endif
                <form action="{{ route('students.update')  }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Class Name</label>
    <select class="form-control" name="class_id" > 
    @foreach(classes as $row)
    <option value="{{ $row->id }}" @if($row->id ==  $student->class_id) selected @endif>{{ $row->class_name }} </option>
    @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Student Name<span class="text-danger">*</span></label>
    <input type="text" name="name" class="form-control" value="{{ $student->name)}}" required>
    @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Student Roll<span class="text-danger">*</span></label>
    <input type="text" name="roll" class="form-control" value="{{ $student->roll)}}" required>
    @error('roll')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Student Roll<span class="text-danger">*</span></label>
    <input type="text" name="email" class="form-control" value="{{ $student->email)}}" required>
    @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Student Roll<span class="text-danger">*</span></label>
    <input type="text" name="phone" class="form-control" value="{{ $student->phone)}}" required>
    @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
