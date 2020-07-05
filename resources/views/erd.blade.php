@extends('layouts.master')
@section('title',' ERD')
@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">ERD (<i>Entity Relationship Diagram)</i></h6>
  </div>
  <div class="card-body">
     <div class="text-center">
       <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 50rem;" src="{{asset('images/erd.png')}}" alt="">
     </div>
  </div>
</div>
@endsection