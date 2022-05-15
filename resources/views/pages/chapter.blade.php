@extends('../layout')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{url('the-loai/'.$truyen_breadcrumb->theloai->slug_theloai)}}">{{$truyen_breadcrumb->theloai->tentheloai}}</a></li>
        <li class="breadcrumb-item"><a href="{{url('danh-muc/'.$truyen_breadcrumb->danhmuctruyen->slug_danhmuc)}}">{{$truyen_breadcrumb->danhmuctruyen->tendanhmuc}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$truyen_breadcrumb->tentruyen}}</li>
    </ol>
</nav>
<div class="row">
    <div class="col-md-12">
        <h4>{{$chapter->truyen->tentruyen}}</h4>
        <p>{{$chapter->tieude}}</p>
        <div class="col-md-5">
            <style type="text/css">
                .isDisabled {
                    color: currentColor;
                    pointer-events: none;
                    opacity: 0.5;
                    text-decoration: none;
                }
            </style>
            <div class="form-group">
                <p class=""><a class="btn btn-primary {{$chapter->id==$min_id->id? 'isDisabled':''}}" href="{{url('xem-chapter/'.$previous_chapter)}}">Tập trước</a></p>
                <label for="exampleInputEmail">Chọn chương</label>
                <select name="select-chapter" class="custom-select select-chapter">
                    @foreach($all_chapter as $key => $chap)
                    <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
                    @endforeach


                </select>
                <p class="mt-4"><a class="btn btn-primary {{$chapter->id==$max_id->id? 'isDisabled':''}}" href="{{url('xem-chapter/'.$next_chapter)}}">Tập sau</a></p>
            </div>
        </div>
        <div class="noidungchuong">
            <p>{!! $chapter->noidung !!}</p>

        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Chọn chương</label>
            <select name="select-chapter" class="custom-select select-chapter">
                @foreach($all_chapter as $key => $chap)
                <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
                @endforeach


            </select>
        </div>
        <h3>Luư và chia sẻ truyện: </h3>
        <div class="fb-share-button" data-href="{{\URL::current()}}" data-layout="button_count" data-size="small"><a target="_blank" href="{{\URL::current()}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
        <div class="row"></div>
        <div class="col-md-12">

            <div class="fb-comments" data-href="{{\URL::current();}}" data-width="100%" data-numposts="10"></div>
        </div>
        <div>
        </div>
    </div>
    @endsection