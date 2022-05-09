@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật truyện</div>
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
                    <form action="{{route('truyen.update',[$truyen->id])}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="">Tên truyện:</label>
                            <input type="text" value="{{$truyen->tentruyen}}" class="form-control" name="tentruyen" onkeyup="ChangeToSlug();" id="slug" placeholder="Them truyen ...">
                        </div>
                        <div class="form-group">
                            <label for="">Tác giả:</label>
                            <input type="text" value="{{$truyen->tacgia}}" class="form-control" name="tacgia"  placeholder="Them tác giả ...">
                        </div>
                        <div class="form-group">
                            <label for="">Slug truyện:</label>
                            <input type="text" value="{{$truyen->slug_truyen}}" class="form-control" name="slug_truyen" id="convert_slug" placeholder="Slug truyen ...">
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh truyện:</label>
                            <input type="file" class="form-control-file" name="hinhanh">
                            <img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height="200" width="200">
                        </div>
                        <div class="form-group">
                            <label for="">Tóm tắt truyện:</label>
                            <textarea name ="tomtat"  class="form-control" rows="5" style="resize: none;">{{$truyen->tomtat}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="sel1">Danh mục truyện:</label>
                            <select class="custom-select" name="danhmuc" id="sel1">
                                @foreach($danhmuc as $key => $muc)
                                <option {{ $muc -> id==$truyen->danhmuc_id ? 'selected':''}} value="{{$muc->id}}">{{$muc->tendanhmuc}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label for="sel1">Thể loại truyện:</label>
                            <select class="custom-select" name="theloai" id="sel1">
                                @foreach($theloai as $key => $the)
                                <option {{$the->id==$truyen->theloai_id?'selected':''}} value={{$the->id}}>{{$the->tentheloai}}</option>
                                @endforeach
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label for="sel1">Kích hoạt:</label>
                            <select class="custom-select" name ="kichhoat" id="sel1">
                            @if ($truyen->kichhoat == 0)
                                <option value="0">Kích hoạt</option>
                                <option value="1">Không kích hoạt</option>
                                @else
                                <option value="0">Kích hoạt</option>
                                <option selected value="1">Không kích hoạt</option>
                                @endif
                            </select>
                        </div>
                        <button type="submit" name="themtruyen" class="btn btn-default">Cập nhật</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection