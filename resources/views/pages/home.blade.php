@extends('../layout')
@section('slide')
@include('pages.slide')
@endsection
@section('content')

<ul class="nav nav-tabs">
    @php
    $i=0
    @endphp
    @foreach($danhmuc as $key =>$tab_danhmuc)
    @php
    $i++;
    @endphp
    <form>
        @csrf
        <li class="nav-item active">
            <a data-danhmuc_id="{{$tab_danhmuc->id}}" class="nav-link tabs_danhmuc {{$i==1?'active':''}}" data-toggle="tab" href="#{{$tab_danhmuc->slug_danhmuc}}">{{$tab_danhmuc->tendanhmuc}}</a>
        </li>
    </form>
    @endforeach
</ul>


<div id="tab_danhmuctruyen"></div>
<style type="text/css">
    a.kytu{
        font-weight: bold;
        padding: 5px 13px;
        color: black;
        font-size: 15px;
        background: burlywood;
        cursor: pointer;
        margin-top: 2%;
    }
    .kytu-plus{
        margin-top: 2%;
    }
</style>
<h3 class="title_truyen">Lọc truyện sách theo A-Z</h3>
<a class="kytu" href="{{url('/kytu/0-9')}}">0-9</a>
@foreach(range('A','Z') as $char)
    <a class="kytu" href="{{url('/kytu/'.$char)}}">{{$char}}</a>
@endforeach
<div class="kytu-plus">
    <a class="kytu" href="{{url('/kytu/Ă')}}">Ă</a>
    <a class="kytu" href="{{url('/kytu/Â')}}">Â</a>
    <a class="kytu" href="{{url('/kytu/Đ')}}">Đ</a>
    <a class="kytu" href="{{url('/kytu/Ê')}}">Ê</a>
    <a class="kytu" href="{{url('/kytu/Ô')}}">Ô</a>
    <a class="kytu" href="{{url('/kytu/Ơ')}}">Ơ</a>


</div>
<div class="album py-5 bg-light">
    <div class="container">
        <h3>SÁCH MỚI CẬP NHẬT</h3>

        <div class="row">
            @foreach($truyen as $key => $value)
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
                    <div class="card-body">
                        <h5>{{$value -> tentruyen}} </h5>
                        <p class="card-text">{{$value -> tomtat}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" type="button" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                <a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>3456</a>
                            </div>
                            <small class="text-muted">9 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="btn btn-success" href="">Xem tất cả</a>
    </div>
</div>
<!-- SACH XEM NHIEU -->

<div class="album py-5 bg-light">

    <div class="container">
        <h3 class="">SÁCH HAY XEM NHIỀU</h3>
        <div class="row">
            @foreach($truyen as $key =>$value)
            @if($value->truyen_noibat==2)
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
                    <div class="card-body">
                        <h3>{{$value-> tentruyen}} </h3>
                        <p class="card-text">{{$value->tomtat}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" type="button" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                <a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>3456</a>
                            </div>
                            <small class="text-muted">9 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

        </div>
        <a class="btn btn-success" href="">Xem tất cả</a>
    </div>

</div>
<!-- BLOG -->


</div>
@endsection