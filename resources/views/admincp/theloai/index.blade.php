@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liệt kê thể loại</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên thể loại</th>
                                <th scope="col">Slug thể loại</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Kích hoạt</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_theloai as $key => $theloai)
                            <tr>
                                <th scope="row">{{$key}}</th>
                                <td>{{$theloai->tentheloai}}</td>
                                <td>{{$theloai->slug_theloai}}</td>
                                <td>{{$theloai->mota}}</td>
                                <td>
                                    @if($theloai->kichhoat==0)
                                    <span class="text text-success">Kich hoat</span>
                                    @else
                                    <span class="text text-danger">Khong kich hoat</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('theloai.edit',[$theloai->id])}}" class = "btn btn-primary">Edit</a>
                                    <form action="{{route('theloai.destroy',[$theloai->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('Bạn muốn xóa thể loại này?');"
                                         class="btn btn-danger">Delete</button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $list_theloai->onEachSide(5)->links() !!}
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
