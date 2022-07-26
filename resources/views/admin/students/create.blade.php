@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <a href="{{ route('create.index') }}" class="btn btn bg-primary">All Class</a>    
            <div class="card-header">{{ __('All Student') }}
                <a href=" {{ route('students.index') }}  "> </a>
            </div>



                <div class="card-body">
                @if(session()->has('success'))
    <strong> {{ session()->get('success')}}</strong>
@endif
                <form action="{{ route('students.store')  }}" method="post">
                    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Class Name</label>
    <select class="form-control" name="class_id"> 
    @foreach(classes as $row)
    <option value="{{ $row->id }}">{{ $row->class_name }} </option>
    @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Student Name<span class="text-danger">*</span></label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name" @error('name') is-invalid @enderror value="{{ old('name')}}" required>
    @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Student Roll</label>
    <input type="text" name="roll" class="form-control" id="exampleInputEmail1" placeholder="roll" @error('roll') is-invalid @enderror value="{{ old('roll')}}">
    @error('roll')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Student Phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="phone" @error('phone') is-invalid @enderror value="{{ old('phone')}}">
    @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Student Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email" @error('email') is-invalid @enderror value="{{ old('email')}}" required>
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
