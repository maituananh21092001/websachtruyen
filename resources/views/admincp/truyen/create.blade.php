@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm truyện</div>
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
                    <form action="{{route('truyen.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên truyện:</label>
                            <input type="text" value="{{old('tentruyen')}}" class="form-control" name="tentruyen" onkeyup="ChangeToSlug();"  placeholder="Them truyen ...">
                        </div>
                        <div class="form-group">
                            <label for="">Tác giả:</label>
                            <input type="text" value="{{old('tacgia')}}" class="form-control" name="tacgia" id="slug" placeholder="Them tác giả ...">
                        </div>
                        <div class="form-group">
                            <label for="">Slug truyện:</label>
                            <input type="text" value="{{old('slug_truyen')}}" class="form-control" name="slug_truyen" id="convert_slug" placeholder="Slug truyen ...">
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh truyện:</label>
                            <input type="file" class="form-control-file" name="hinhanh">
                        </div>
                        <div class="form-group">
                            <label for="">Tóm tắt truyện:</label>
                            <textarea name ="tomtat" class="form-control" rows="5" style="resize: none;"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="sel1">Danh mục truyện:</label>
                            <select class="custom-select" name="danhmuc" id="sel1">
                                @foreach($danhmuc as $key => $muc)
                                <option value="{{$muc->id}}">{{$muc->tendanhmuc}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sel1">Kích hoạt:</label>
                            <select class="custom-select" name ="kichhoat" id="sel1">
                               
                                <option value="0">Kích hoạt</option>
                                <option value="1">Không kích hoạt</option>
                            </select>
                        </div>
                        <button type="submit" name="themtruyen" class="btn btn-default">Thêm</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection