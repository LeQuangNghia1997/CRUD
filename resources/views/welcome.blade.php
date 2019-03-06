@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Sản Phẩm
    </div>

    <div class="links">
        <a href="{{ route('index') }}">Danh sách sản phẩm</a>
        <a href="{{ route('create') }}">Thêm mới sản phẩm</a>
    </div>
@endsection