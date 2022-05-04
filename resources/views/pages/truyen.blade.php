@extends('../layout')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-3">
                <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem9.jpg')}}">
            </div>
            <div class="col-md-9">
                <style type="text/css">
                    .infotruyen {
                        list-style: none;
                    }
                </style>
                <ul class="infotruyen">
                    <li>Tác giả: Yokoshima</li>
                    <li>Thể loại: Trinh thám cổ tích</li>
                    <li>Số chapter: 200</li>
                    <li>Số lượt xem: 200</li>
                    <li><a href="">Xem mục lục</a></li>
                    <li>
                        <a class="btn btn-primary" href="">Đọc Online</a>
                    </li>
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

            <li><a href="">PHẦN THỨ NHẤT: CHƯƠNG MỘT</a></li>
            <li><a href="">PHẦN THỨ NHẤT: CHƯƠNG MỘT</a></li>
            <li><a href="">PHẦN THỨ NHẤT: CHƯƠNG MỘT</a></li>
            <li><a href="">PHẦN THỨ NHẤT: CHƯƠNG MỘT</a></li>
            <li><a href="">PHẦN THỨ NHẤT: CHƯƠNG MỘT</a></li>
            <li><a href="">PHẦN THỨ NHẤT: CHƯƠNG MỘT</a></li>
        </ul>
        <h4>Sách cùng danh mục</h4>
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <a href=""></a>
                    <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem9.jpg')}}">
                    <div class="card-body">
                        <h5>This is a wider card with supporting text </h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <a href=""></a>
                    <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem9.jpg')}}">
                    <div class="card-body">
                        <h5>This is a wider card with supporting text </h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <a href=""></a>
                    <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem9.jpg')}}">
                    <div class="card-body">
                        <h5>This is a wider card with supporting text </h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm">
                    <a href=""></a>
                    <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem9.jpg')}}">
                    <div class="card-body">
                        <h5>This is a wider card with supporting text </h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                       
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-3">
        Sách hay xem nhiều
    </div>
</div>
</div>
@endsection