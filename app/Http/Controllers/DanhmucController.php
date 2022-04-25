<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;

class DanhmucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhmuctruyen = DanhmucTruyen::orderBy('id','DESC')->get();

        return view('admincp.danhmuctruyen.index')->with(compact('danhmuctruyen')) ; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.danhmuctruyen.create')  ; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> validate(
        [
            'tendanhmuc' => 'required|unique:danhmuc|max:255',
            'slug_danhmuc' =>'required|unique:danhmuc|max:255',
            'mota' => 'required|max:255',
            'kichhoat' =>'required',
        ],
        [
            'tendanhmuc.required' => 'Ten danh muc phai co',
            'tendanhmuc.unique' => 'Ten danh muc da ton tai',
            'slug_danhmuc.unique' => 'Slug danh muc da ton tai',
            'slug_danhmuc.required' => 'Slug danh muc phai co',
            'mota.required' => 'Mo ta danh muc phai co',
        ]

        );
        //$data = $request->all();
       // dd($data);
        $danhmuctruyen = new DanhmucTruyen();
        $danhmuctruyen -> tendanhmuc = $data['tendanhmuc'];
        $danhmuctruyen-> slug_danhmuc = $data['slug_danhmuc'];
        $danhmuctruyen -> mota = $data['mota'];
        $danhmuctruyen -> kichhoat = $data['kichhoat'];
        $danhmuctruyen ->save();
        return redirect()->back()->with('status','Theem danh muc thanh cong');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $danhmuc = Danhmuctruyen::find($id);
        return view('admincp.danhmuctruyen.edit')->with(compact('danhmuc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request -> validate(
            [
                'tendanhmuc' => 'required|max:255',
                'slug_danhmuc' => 'required|max:255',
                'mota' => 'required|max:255',
                'kichhoat' =>'required',
            ],
            [
                'tendanhmuc.required' => 'Ten danh muc phai co',
                'slug_danhmuc.required' => 'Slug danh mucdanh muc phai co',
                'mota.required' => 'Mo ta danh muc phai co',
            ]
    
            );
            $danhmuctruyen =  DanhmucTruyen::find($id);
            $danhmuctruyen -> tendanhmuc = $data['tendanhmuc'];
            $danhmuctruyen-> slug_danhmuc = $data['slug_danhmuc'];
            $danhmuctruyen -> mota = $data['mota'];
            $danhmuctruyen -> kichhoat = $data['kichhoat'];
            $danhmuctruyen ->save();
            return redirect()->back()->with('status','Cap nhat danh muc thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Danhmuctruyen::find($id)->delete();

        return redirect()->back()->with('status','Xoa danh muc thanh cong');
    }
    public function tim_kiem(){

    }
}
