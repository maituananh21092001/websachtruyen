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


        <div id="tab_danhmuctruyen">
            <div class="row">
                
            </div>
        </div>
    
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