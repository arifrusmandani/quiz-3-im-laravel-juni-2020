<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArtikelModel;

class ArtikelController extends Controller
{
    public function index()
    {
    	$artikel = ArtikelModel::get_all();
    	return view('artikel.index',compact('artikel'));
    }

    public function create()
    {
    	return view('artikel.create');
    }

    public function store(Request $request)
    {
    	$to_lower = strtolower($request->judul);
    	$slug = str_replace(' ', '-', $to_lower);
    	$data = array(
    		'judul' => $request->judul,
    		'slug' => $slug,
    		'isi' => $request->isi,
    		'tag' => $request->tag,
    		'created_at' => \Carbon\Carbon::now(),
    		'updated_at' => \Carbon\Carbon::now()
    	);

    	ArtikelModel::simpan($data);
    	return redirect('/artikel')->with('message','Data Berhasil Ditambahkan!');
    }

    public function show($id)
    {
    	$artikel = ArtikelModel::find_id($id);
    	return view('artikel.show',compact('artikel'));
    }

    public function edit($id)
    {
    	$artikel = ArtikelModel::find_id($id);
    	return view('artikel.edit',compact('artikel'));
    }

    public function update($id, Request $request)
    {
    	$to_lower = strtolower($request->judul);
    	$slug = str_replace(' ', '-', $to_lower);
    	$data = array(
    		'judul' => $request->judul,
    		'slug' => $slug,
    		'isi' => $request->isi,
    		'tag' => $request->tag,
    		'updated_at' => \Carbon\Carbon::now()
    	);

    	ArtikelModel::update_id($id,$data);
    	return redirect('/artikel')->with('message','Data Berhasil Diupdate!');
    }

    public function destroy($id)
    {
    	$deleted = ArtikelModel::destroy($id);
    	return back();
    }
}
