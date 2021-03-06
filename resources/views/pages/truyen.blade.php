@extends('../layout')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$truyen->tentruyen}}</li>
    </ol>
</nav>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-3">
                <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}">
            </div>
            <div class="col-md-9">
                <style type="text/css">
                    .infotruyen {
                        list-style: none;
                    }
                </style>
                <ul class="infotruyen">
                    <input type="hidden" value="{{$truyen->tentruyen}}" class="wishlist_title">
                    <input type="hidden" value="{{\URL::current()}}" class="wishlist_url">
                    <input type="hidden" value="{{$truyen->id}}" class="wishlist_id">
                    <li>Tên truyện: {{$truyen->tentruyen}}</li>
                    <li>Tác giả: {{$truyen->tacgia}}</li>
                    <li>Danh mục truyện: <a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}"></a>
                        {{$truyen->danhmuctruyen->tendanhmuc}}
                    </li>
                    <li>Thể loại truyện: <a href="{{url('the-loai/'.$truyen->theloai->slug_theloai)}}"></a>
                        {{$truyen->theloai->tentheloai}}
                    </li>
                    <li>Số chapter: 200</li>
                    <li>Số lượt xem: 200</li>
                    <li><a href="">Xem mục lục</a></li>

                    @if($chapter_dau)
                    <li>
                        <a class="btn btn-primary" href="{{url('xem-chapter/'.$chapter_dau->slug_chapter)}}">Đọc Online</a>
                        <button class="btn btn-danger btn-thich_truyen"><i class="fa fa-heart" aria-hidden="true"></i> Thích truyện</button>
                    </li>

                    <li>
                        <a class="mt-2 btn btn-success" href="{{url('xem-chapter/'.$chapter_moinhat->slug_chapter)}}">Đọc chương mới nhất</a>
                    </li>
                    @else
                    <li><a class="btn btn-primary">Hiện tại chưa có chương</a></li>
                    @endif

                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <p>
                Kho tàng truyện cổ vô cùng đa dạng của Nghìn lẻ một đêm được kết nối xoay quanh một trục đơn giản: Xưa kia ở miền Đông Ả-rập, thời Sassanid có một vị vua Ba Tư Shahriyar. Vị vua ngự trị trên một hòn đảo không rõ tên "ở giữa Ấn Độ và Trung Quốc" (trong các bản dịch tiếng Ả Rập hiện nay thì ông ta là vua của Ấn Độ và Trung Quốc). Vì hoàng hậu ngoại tình nên đâm ra chán ghét tất cả đàn bà, tính nết trở nên hung bạo. Để thỏa cơn thịnh nộ điên loạn, cứ mỗi ngày ông ta cưới một cô gái và sau một đêm mặn nồng lại sai lính đem giết (trong một số bản: ba đêm một lần). Thấy đất nước lâm nguy, Sheherazade xin cha cho mình được một đêm hưởng ân sủng của hoàng thượng. Viên tể tướng rất đau lòng khi thấy con mình như vậy vì ông biết sau đêm đó nàng sẽ chết. Nhưng trước sự quyết tâm của con ông đành phải đem con dâng cho vua Shahriyar. Là cô gái thông minh, tài trí lại giàu nghị lực, nên sau nàng đã tìm được cách để thoát khỏi cái chết. Nàng cùng với sự giúp đỡ của em gái nàng là Dinarzade, nàng nhờ em đánh thức mình dậy khi trời sắp sáng và yêu cầu nàng kể chuyện. Những câu chuyện được sắp xếp khéo léo để đúng khi mặt trời mọc là lúc hấp dẫn nhất, nàng kín đáo dừng lại khi chuyện chưa chấm dứt khiến vua còn nóng lòng muốn nghe đoạn tiếp, không thể ra lệnh xử tử nàng.
            </p>
        </div>
        <hr>
        <h4>Mục lục</h4>
        <ul class="mucluctruyen">
            @php
            $mucluc = count($chapter)
            @endphp
            @if($mucluc>0)
            @foreach($chapter as $key =>$chap)
            <li><a href="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</a></li>
            @endforeach
            @else
            <li>Muc lục đang cập nhật</li>
            @endif
        </ul>
        <div class="fb-comments" data-href="{{\URL::current();}}" data-width="100%" data-numposts="10"></div>

        <h4>Sách cùng danh mục</h4>
        <div class="row">
            @foreach($cungdanhmuc as $key => $value)
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

    </div>
    <div class="col-md-3">
        <h3 class="card-header">Truyện nổi bật</h3>
        @foreach($truyennoibat as $key=> $noibat)
        <div class="row mt-2">
            <div class="col-md-5"><img class="img img-responsive" width="100%" class="card-img-top" src = "{{asset('public/uploads/truyen/'.$noibat->hinhanh)}}" alt="{{$noibat->tentruyen}}">
            </div>
            <div class="col-md-7 slidebar">
                <a href="{{url('xem-truyen/'.$noibat->slug_truyen)}}">
                    <p>{{$noibat->tentruyen}}</p>
                    <p><i class="fas fa-eye"></i>233</p>
                </a>
            </div>
        </div>
        @endforeach
        <h3 class="card-header">Truyện xem nhiều</h3>
        @foreach($truyenxemnhieu as $key=> $xemnhieu)
        <div class="row mt-2">
            <div class="col-md-5"><img class="img img-responsive" width="100%" class="card-img-top" src = "{{asset('public/uploads/truyen/'.$xemnhieu->hinhanh)}}" alt="{{$noibat->tentruyen}}">
            </div>
            <div class="col-md-7 slidebar">
                <a href="{{url('xem-truyen/'.$xemnhieu->slug_truyen)}}">
                    <p>{{$xemnhieu->tentruyen}}</p>
                    <p><i class="fas fa-eye"></i>233</p>
                </a>
            </div>
        </div>
        @endforeach
        <h3 class="title_truyen card-header">Truyện yêu thích</h3>
        <div id="yeuthich"></div>
    </div>
</div>
</div>
@endsection