<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
use App\Models\Chapter;
use App\Models\Theloai;

class IndexController extends Controller
{
    public function timkiem_ajax(Request $request){
        $data = $request->all();

        if($data['keywords']){
            $truyen = Truyen::where('kichhoat',0)->where('tentruyen','LIKE','%'.$data['keywords'].'%')->get();

            $output = '
                <ul class="dropdown-menu" style="display:block;left:480px;top:49%">';

            foreach($truyen as $key => $tr){
                $output .= '
                    <li class="li_timkiem_ajax"><a href="#">'.$tr->tentruyen.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
    } 

    public function tabs_danhmuc(Request $request){
        $data = $request->all();
        $output = '';
        $truyen = Truyen::with('danhmuctruyen','theloai')->where('danhmuc_id',$data['danhmuc_id'])->get();
        foreach($truyen as $key => $value){
            $output.='
            <ul class="mucluctabs_truyen">
            <li><a target = "_blank" href="'.url('xem-truyen/'.$value->slug_truyen).'">'.$value->tentruyen.'</a></li>
        </ul>
            ';
        }
        echo $output;
    }

    public function home()
    {
        $theloai = Theloai::orderBy('id', 'DESC')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $truyen =  Truyen::orderBy('id', 'DESC')->where('kichhoat', 0)->get();
        return view('pages.home')->with(compact('danhmuc', 'truyen', 'theloai','slide_truyen'));
    }

    public function danhmuc($slug)
    {
        $theloai = Theloai::orderBy('id', 'DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();
        $danhmuc_id = DanhmucTruyen::where('slug_danhmuc', $slug)->first();
        $tendanhmuc = $danhmuc_id->tendanhmuc;
        $truyen =  Truyen::orderBy('id', 'DESC')->where('kichhoat', 0)->where('danhmuc_id', $danhmuc_id->id)->get();
        return view('pages.danhmuc')->with(compact('danhmuc', 'truyen','tendanhmuc', 'theloai','slide_truyen'));
    }
    public function theloai($slug)
    {
        $theloai = Theloai::orderBy('id', 'DESC')->get();
        $danhmuc = Theloai::orderBy('id', 'DESC')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();
        $theloai_id = Theloai::where('slug_theloai', $slug)->first();
        $tentheloai = $theloai_id->tentheloai;
        $truyen =  Truyen::orderBy('id', 'DESC')->where('kichhoat', 0)->where('danhmuc_id', $theloai_id->id)->get();
        return view('pages.theloai')->with(compact('danhmuc', 'truyen','tentheloai', 'theloai','slide_truyen'));
    }

    public function xemtruyen($slug)
    {
        $theloai = Theloai::orderBy('id', 'DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $truyen = Truyen::with('danhmuctruyen','theloai')->where('slug_truyen', $slug)->where('kichhoat', 0)->first();
        $chapter = Chapter::with('truyen')->orderBy('id', 'ASC')->where('truyen_id', $truyen->id)->get();
        $chapter_dau = Chapter::with('truyen')->orderBy('id', 'ASC')->where('truyen_id', $truyen->id)->first();
        $chapter_moinhat = Chapter::with('truyen')->orderBy('id', 'DESC')->where('truyen_id', $truyen->id)->first();
        $cungdanhmuc = Truyen::with('danhmuctruyen','theloai')->where('danhmuc_id', $truyen->danhmuctruyen->id)->whereNotIn('id', [$truyen->id])->get();
       
       $truyennoibat = Truyen::where('truyen_noibat',1)->take(20)->get();
       $truyenxemnhieu = Truyen::where('truyen_noibat',2)->take(20)->get();
        return view('pages.truyen')->with(compact('danhmuc', 'truyen', 'chapter', 'cungdanhmuc', 'chapter_dau', 'theloai','chapter_moinhat','truyennoibat','truyenxemnhieu'));
    }

    public function xemchapter($slug)
    {
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();
        $theloai = Theloai::orderBy('id', 'DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $truyen = Chapter::where('slug_chapter', $slug)->first();
        //breadcrumb
        $truyen_breadcrumb = Truyen::with('danhmuctruyen','theloai')->where('id', $truyen->truyen_id)->first();
        //end
        
       
        $chapter = Chapter::with('truyen')->where('slug_chapter', $slug)->where('truyen_id', $truyen->truyen_id)->first();
        $all_chapter =   Chapter::with('truyen')->orderBy('id', 'ASC')->where('truyen_id', $truyen->truyen_id)->get();
        $next_chapter = Chapter::where('truyen_id', $truyen->truyen_id)->where('id', '>', $chapter->id)->min('slug_chapter');
        $max_id = Chapter::where('truyen_id', $truyen->truyen_id)->orderBy('id', 'DESC')->first();
        $min_id = Chapter::where('truyen_id', $truyen->truyen_id)->orderBy('id', 'ASC')->first();

        $previous_chapter = Chapter::where('truyen_id', $truyen->truyen_id)->where('id', '<', $chapter->id)->max('slug_chapter');

        return view('pages.chapter')->with(compact('danhmuc', 'chapter', 'all_chapter', 'next_chapter', 'previous_chapter', 'max_id', 'min_id', 'theloai','truyen_breadcrumb','slide_truyen'));
    }

    public function timkiem(Request $request){
        $data = $request ->all();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();
        $theloai = Theloai::orderBy('id', 'DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        $tukhoa = $data['tukhoa'];
        $truyen = Truyen::with('danhmuctruyen','theloai')->where('tentruyen','LIKE','%'.$tukhoa.'%')->orWhere('tomtat','LIKE','%'.$tukhoa.'%')->orWhere('tacgia','LIKE','%'.$tukhoa.'%')->get();
        return view('pages.timkiem')->with(compact('danhmuc','truyen','theloai','slide_truyen','tukhoa'));

    }
}
