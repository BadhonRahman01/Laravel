@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Categoy') }}</div>

                <div class="card-body">
                    <a href="{{ route('category.index')}}">Add Category</a>
      

                    <table class="table table-responsive">
                        <thead> 
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category as $key=>$row)
                            <tr> 
                                <td>{{ ++$key}}</td>
                                <td>{{ $row->category_name }}</td>
                                <td>{{ $row->category_slug }}</td>
                                <td>
                                    <a class="btn btn-dark">edit</a>
                                    <a class="btn btn-danger">delete</a>
                                </td>
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
