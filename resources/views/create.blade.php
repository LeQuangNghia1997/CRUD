@extends('layouts.master')
@section('title', 'Thêm mới sản phẩm')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới sản phẩm </h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" placeholder="Enter description" required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Enter price" required>
                    </div>
                    <div class="form-group">
                        <label>View Count</label>
                        <input type="number" class="form-control" name="count" placeholder="Enter view count" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" name="image" placeholder="Enter image" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('welcome') }}" class="btn btn-primary"> Home </a>
                </form>
            </div>
        </div>
    </div>
@endsection