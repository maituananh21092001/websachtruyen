@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật danh mục truyện</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="D-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{route('danhmuc.update',[$danhmuc->id])}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="">Tên danh mục:</label>
                            <input type="text" value="{{$danhmuc->tendanhmuc}}" class="form-control" name="tendanhmuc" onkeyup="ChangeToSlug();" id="slug" placeholder="Them danh muc ...">
                        </div>
                        <div class="form-group">
                            <label for="">Slug danh mục:</label>
                            <input type="text" value="{{$danhmuc->slug_danhmuc}}" class="form-control" name="slug_danhmuc" id="convert_slug" placeholder="Slug danh muc ...">
                        </div>
                        <div class="form-group">
                            <label for="">Mô tae danh mục:</label>
                            <input type="text" value="{{$danhmuc->mota}}" class="form-control" name="mota" id="email" placeholder="Mô tả danh mục...">
                        </div>
                        <div class="form-group">
                            <label for="sel1">Kích hoạt:</label>
                            <select class="custom-select" name ="kichhoat" id="sel1">
                               @if ($danhmuc->kichhoat == 0)
                                <option value="0">Kích hoạt</option>
                                <option value="1">Không kích hoạt</option>
                                @else
                                <option value="0">Kích hoạt</option>
                                <option selected value="1">Không kích hoạt</option>
                                @endif
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Cập nhật</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection