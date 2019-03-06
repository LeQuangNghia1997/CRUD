@extends('layouts.master')

@section('title', 'Cập nhật công viêc')


@section('content')

    <div class="row">

        <div class="col-md-12">

            <h2>Cập nhật công việc</h2>

        </div>

        <div class="col-md-12">

            <form method="post" action="{{ route('update', $product->id) }}" enctype="multipart/form-data">

                @csrf

                <div class="form-group">

                    <label>Name</label>

                    <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>

                </div>

                <div class="form-group">

                    <label>Description</label>

                    <textarea class="form-control" rows="3" name="description"  required>{{ $product->description }}</textarea>

                </div>
                <div class="form-group">

                    <label>Price</label>

                    <textarea class="form-control" rows="3" name="price"  required>{{ $product->price }}</textarea>

                </div>
                <div class="form-group">

                    <label>Ảnh</label>

                    <input type="file" name="image" class="form-control-file" >

                </div>
                <div class="form-group">

                    <label>Count</label>

                    <textarea class="form-control" rows="3" name="view_count"  required>{{ $product->view_count }}</textarea>

                </div>

                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>

                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>

            </form>

        </div>

    </div>


@endsection