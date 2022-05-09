@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm thể loại</div>
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
                    <form action="{{route('theloai.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên thể loại:</label>
                            <input type="text" value="{{old('tentheloai')}}" class="form-control" name="tentheloai" onkeyup="ChangeToSlug();"  placeholder="Them the loai ...">
                        </div>
                       
                        <div class="form-group">
                            <label for="">Slug thể loại:</label>
                            <input type="text" value="{{old('slug_theloai')}}" class="form-control" name="slug_theloai" id="convert_slug" placeholder="Slug theloai ...">
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả:</label>
                            <input type="text" value="{{old('mota')}}" class="form-control" name="mota" placeholder="Mo ta the loai ...">
                        </div>
                      
                       
                        <div class="form-group">
                            <label for="sel1">Kích hoạt:</label>
                            <select class="custom-select" name ="kichhoat" id="sel1">
                               
                                <option value="0">Kích hoạt</option>
                                <option value="1">Không kích hoạt</option>
                            </select>
                        </div>
                        <button type="submit" name="themtheloai" class="btn btn-default">Thêm</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection