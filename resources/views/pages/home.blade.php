@extends('../layout')
@section('slide')
@include('pages.slide')
@endsection
@section('content')
<h3>SÁCH MỚI CẬP NHẬT</h3>
<div class="album py-5 bg-light">
    <div class="container">
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
<h3>SÁCH HAY XEM NHIỀU</h3>
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem9.jpg')}}">
                    <div class="card-body">
                        <h3>This is a wider card with supporting text </h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="" type="button" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                <a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>3456</a>
                            </div>
                            <small class="text-muted">9 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem9.jpg')}}">
                    <div class="card-body">
                        <h3>This is a wider card with supporting text </h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="" type="button" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                <a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>3456</a>
                            </div>
                            <small class="text-muted">9 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem9.jpg')}}">
                    <div class="card-body">
                        <h3>This is a wider card with supporting text </h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="" type="button" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                <a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>3456</a>
                            </div>
                            <small class="text-muted">9 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem9.jpg')}}">
                    <div class="card-body">
                        <h3>This is a wider card with supporting text </h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="" type="button" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                <a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>3456</a>
                            </div>
                            <small class="text-muted">9 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-success" href="">Xem tất cả</a>
</div>
<!-- BLOG -->
<h3>BLOG</h3>
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem9.jpg')}}">
                    <div class="card-body">
                        <h3>This is a wider card with supporting text </h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="" type="button" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                <a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>3456</a>
                            </div>
                            <small class="text-muted">9 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem9.jpg')}}">
                    <div class="card-body">
                        <h3>This is a wider card with supporting text </h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="" type="button" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                <a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>3456</a>
                            </div>
                            <small class="text-muted">9 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem9.jpg')}}">
                    <div class="card-body">
                        <h3>This is a wider card with supporting text </h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="" type="button" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                <a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>3456</a>
                            </div>
                            <small class="text-muted">9 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem9.jpg')}}">
                    <div class="card-body">
                        <h3>This is a wider card with supporting text </h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="" type="button" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                <a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>3456</a>
                            </div>
                            <small class="text-muted">9 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-success" href="">Xem tất cả</a>
</div>
@endsection