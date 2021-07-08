<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ShowController extends Controller
{
    public function index()
    {
        $meeting = \App\products::where('category_id',1)->get();
        $workspace = \App\products::where('category_id',2)->get();
        $voffice = \App\products::where('category_id',3)->get();
        $product = \App\products::all();
        return view('welcome',compact('meeting','workspace','voffice','product'));
    }
    public function meeting()
    {
        $show = \App\products::where('product_type','meeting')->get();
        return view('product',compact('show'));
    }
    public function meeting_detail($id)
    {
        $show = \App\products::where('id',$id)->first();
        $review = \App\reviews::where('product_id',$show->id)->get();
        return view('product_detail',compact('show','review'));
    }
    public function workspace()
    {
        $show = \App\products::where('product_type','workspace')->get();
        return view('product',compact('show'));
    }
    public function workspace_detail($id)
    {
        $show = \App\products::where('id',$id)->first();
        $review = \App\reviews::where('product_id',$show->id)->get();
        return view('product_detail',compact('show','review'));
    }
    public function virtualoffice()
    {
        $show = \App\products::where('product_type','virtualoffice')->get();
        return view('product',compact('show'));
    }
    public function virtualoffice_detail($id)
    {
        $show = \App\products::where('id',$id)->first();
        $review = \App\reviews::where('product_id',$show->id)->get();
        return view('product_detail',compact('show','review'));
    }
    public function search(Request $request)
    {
        $lokasi = $request->lokasi;
        $type = $request->type;
        $show = \App\products::where('description','like',"%".$lokasi."%")->where('product_type',$type)->get();
        return view('product',compact('show'));
    }
    public function daftarkan()
    {
        return view('daftar_ruangan');
    }
}
