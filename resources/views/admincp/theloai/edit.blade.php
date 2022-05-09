@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật thể loại</div>
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
                    <form action="{{route('theloai.update',[$theloai->id])}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="">Tên thể loại:</label>
                            <input type="text" value="{{$theloai->tentheloai}}" class="form-control" name="tentheloai" onkeyup="ChangeToSlug();" id="slug" placeholder="Them thể loại ...">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Slug thể loại:</label>
                            <input type="text" value="{{$theloai->slug_theloai}}" class="form-control" name="slug_theloai" id="convert_slug" placeholder="Slug the loai ...">
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả thể loại:</label>
                            <input type="text" value="{{$theloai->mota}}" class="form-control" name="mota" id="convert_slug" placeholder="Mô tả ...">
                        </div>
                        
                        <div class="form-group">
                            <label for="sel1">Kích hoạt:</label>
                            <select class="custom-select" name ="kichhoat" id="sel1">
                            @if ($theloai->kichhoat == 0)
                                <option value="0">Kích hoạt</option>
                                <option value="1">Không kích hoạt</option>
                                @else
                                <option value="0">Kích hoạt</option>
                                <option selected value="1">Không kích hoạt</option>
                                @endif
                            </select>
                        </div>
                        <button type="submit" name="themtheloai" class="btn btn-default">Cập nhật</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection