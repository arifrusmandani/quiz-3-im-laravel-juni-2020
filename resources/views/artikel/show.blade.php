@extends('layouts.master')
@section('title',' Detail Artikel')
@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Detail Artikel</h6>
  </div>
  <div class="card-body">
     <h3>Judul : {{$artikel->judul}}</h3>
     <small>slug : {{$artikel->slug}} | Dibuat : {{$artikel->created_at}}</small><br><br>
     <p>{{$artikel->isi}}</p>
     <?php
     	$tags = explode(',', $artikel->tag)
     ?>
     @foreach($tags as $tag)
	 <button type="button" class="btn btn-success">{{$tag}}</button>
	 @endforeach
  </div>
</div>
@endsection