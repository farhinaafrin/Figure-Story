@extends('layouts.dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Category </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
                    <li class="breadcrumb-item "><a href="{{ route('category.index') }}">Category List</a></li>
                    <li class="breadcrumb-item active"> Edit Category </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between align-item-center">
                            <h3 class="card-title"> Edit Category - {{ $category->name }}</h3>

                            <a class="btn btn-primary" href="{{route('category.index') }}">Go Back To Category List</a>

                        </div>

                    </div>

                    <div class="card-body p-0">
                        <div class="row">
                            <div class=" col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="{{ route('category.update',[$category->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        @include('providers.errors')
                                        <div class="form-group">
                                            <label for="name" >Category Name</label>
                                            <input  type="name" class="form-control" value="{{ $category->name }}" name="name" 
                                                placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Description</label>
                                            <textarea name="description" id="description" rows="4" class="form-control"
                                                placeholder="Enter description">{{ $category->description }}</textarea>

                                        </div>


                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Upadate Category</button>
                                    </div>
                                </form>
                            </div>

                        </div>


                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

@endsection
