@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm chapter truyện</div>
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
                    <form action="{{route('chapter.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên chapter:</label>
                            <input type="text" value="{{old('tieude')}}" class="form-control" name="tieude" onkeyup="ChangeToSlug();" id="slug" placeholder="Them chapter ...">
                        </div>
                        <div class="form-group">
                            <label for="">Slug chapter:</label>
                            <input type="text" value="{{old('slug_chapter')}}" class="form-control" name="slug_chapter" id="convert_slug" placeholder="Slug chapter ...">
                        </div>
                        <div class="form-group">
                            <label for="">Tóm tắt chapter:</label>
                            <input type="text"  value="{{old('tomtat')}}" class="form-control" name="tomtat" id="email" placeholder="Mô tả chapter...">
                        </div>
                        <div class="form-group">
                            <label for="">Tóm tắt chapter:</label>
                            <textarea name = "noidung" class="form-control" rows="5" style="resize: none;"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="sel1">Thuộc truyện:</label>
                           
                            <select class="custom-select" name ="truyen_id" id="sel1">
                            @foreach($truyen as $key => $value)
                                <option value="{{$value->id}}">{{$value->tentruyen}}</option>
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
                        <button type="submit" class="btn btn-default">Thêm</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection