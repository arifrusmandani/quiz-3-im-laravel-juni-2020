@extends('layouts.master')
@section('title',' Buat Artikel')
@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Buat Artikel Baru</h6>
  </div>
  <div class="card-body">
     <form action="/artikel" method="post">
     	@csrf
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Isi</label>
    <textarea name="isi" id="isi" cols="30" rows="10" class="form-control" required></textarea>
  </div>
  <div class="form-group">
    <label for="tag">Tags</label>
    <input type="text" class="form-control" name="tag" id="tag" placeholder="Ex: laravel,javascipt,php" required>
    <small id="tag" class="form-text text-muted">Untuk lebih dari satu tag pisahkan dengan koma (,).</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
@endsection