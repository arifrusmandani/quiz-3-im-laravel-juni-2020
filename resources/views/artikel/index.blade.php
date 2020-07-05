@extends('layouts.master')
@section('content')
@section('title',' List Artikel')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Artikel</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
    		<div class="row">
    			<div class="col-md-6">
    				<h4>Daftar Artikel</h4>
    			</div>
    			<div class="col-md-6 float-right">
    				
    			<a href="/artikel/create" class="btn btn-primary float-right">Buat Artikel</a>
    			</div>
    		</div>
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 mt-3">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width:5%;">No</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 20%;">Judul</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 20%;">Slug</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 30%">Isi</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 15%">Tag</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 10%;">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">No</th>
                                    <th rowspan="1" colspan="1">Judul</th>
                                    <th rowspan="1" colspan="1">Slug</th>
                                    <th rowspan="1" colspan="1">Isi</th>
                                    <th rowspan="1" colspan="1">Tag</th>
                                    <th rowspan="1" colspan="1">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no = 1;?>
                                @foreach($artikel as $art)
                                <tr role="row">
                                    <td class="sorting_1">{{$no++}}</td>
                                    <td>{{$art->judul}}</td>
                                    <td>{{$art->slug}}</td>
                                    <td>{{substr($art->isi, 0,100)}}...</td>
                                    <td>{{$art->tag}}</td>
                                    <td><a href="/artikel/{{$art->id}}" type="button" class="btn btn-primary btn-sm" title="Detail"><i class="fas fa-fw fa-eye"></i></a> <a href="/artikel/{{$art->id}}/edit" type="button" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-fw fa-edit"></i></a> 
									<form action="/artikel/{{$art->id}}" method="post" style="display: inline;">
									@csrf
									@method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash" title="Delete"></i></button></td>
									</form>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
  <script src="{{asset('sbadmin2/js/swal.min.js')}}"></script>
  <script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
  </script>
@endpush