@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <a href="{{ route('create.index') }}" class="btn btn bg-primary">All Class</a>    
            <div class="card-header">{{ __('Add new Class') }}</div>



                <div class="card-body">
                @if(session()->has('success'))
    <strong> {{ session()->get('success')}}</strong>
@endif
                <form action="{{ route('store.class)  }}" method="post">
                    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Class Name</label>
    <input type="text" name="class_name" class="form-control" id="exampleInputEmail1" placeholder="Class Name" @error('class_name') is-invalid @enderror value="{{ old('class_name')}}">
    @error('class_name')
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
