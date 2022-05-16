@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liệt kê truyện</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên truyện</th>
                                <th scope="col">Hình ảnh</th>
                                <th>Slug _truyện</th>
                                <th scope="col">Tóm tắt</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Thể loại</th>
                                <th scope="col">Nổi bật</th>
                                <th scope="col">Kích hoạt</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Ngày cập nhật mới nhất</th>
                                <th scope="col">Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_truyen as $key => $truyen)
                            <tr>
                                <th scope="row">{{$key}}</th>
                                <td>{{$truyen->tentruyen}}</td>
                                <td><img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height="200" width="200"></td>
                                <td>{{$truyen->slug_truyen}}</td>
                                <td>{{$truyen->tomtat}}</td>
                                <td>{{$truyen->danhmuctruyen->tendanhmuc}}</td>
                                <td>{{$truyen->theloai->tentheloai}}</td>
                                <td>
                                    @if($truyen->kichhoat==0)
                                    <span class="text text-success">Kich hoat</span>
                                    @else
                                    <span class="text text-danger">Khong kich hoat</span>
                                    @endif
                                </td>
                                <td>
                                    @if($truyen->truyen_noibat==0)
                                    <form>
                                        @csrf
                                        <select data-truyen_id = "{{$truyen->id}}" class="custom-select truyennoibat" name="truyennoibat" id="sel1">
                                            <option selected value="0">Truyện mới</option>
                                            <option value="1">Truyện nổi bật</option>
                                            <option value="2">Truyện xem nhiều</option>
                                        </select>
                                    </form>
                                    @elseif($truyen->truyen_noibat==1)
                                    <form>
                                        @csrf
                                        <select data-truyen_id = "{{$truyen->id}}" class="custom-select truyennoibat" name="truyennoibat" id="sel1">
                                            <option value="0">Truyện mới</option>
                                            <option selected value="1">Truyện nổi bật</option>
                                            <option value="2">Truyện xem nhiều</option>

                                        </select>
                                    </form>
                                    @elseif($truyen->truyen_noibat==2)
                                    <form>
                                        @csrf
                                        <select data-truyen_id = "{{$truyen->id}}" class="custom-select truyennoibat" name="truyennoibat" id="sel1">
                                            <option value="0">Truyện mới</option>
                                            <option value="1">Truyện nổi bật</option>
                                            <option selected value="2">Truyện xem nhiều</option>

                                        </select>
                                    </form>
                                    @endif
                                </td>
                                <td>{{$truyen->created_at}} - {{$truyen->created_at->diffForHumans()}}</td>

                                <td>
                                    @if($truyen->update_at!='')
                                    {{$truyen->update_at}}- {{$truyen->update_at->diffForHumans()}}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('truyen.edit',[$truyen->id])}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('truyen.destroy',[$truyen->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('Bạn muốn xóa truyen này?');" class="btn btn-danger">Delete</button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection