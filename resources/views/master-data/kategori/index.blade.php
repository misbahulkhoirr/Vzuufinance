@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{$title}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{$title}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <a href="{{url('/master-data/kategori-pembukuan/create')}}" title="Create User" class="btn btn-warning"><span class="fas fa-plus"></span> Tambah</a>
        </div>
        <div class="card-body p-0">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <table class="table projects">
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Nama Kategori </th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                  @foreach ($kategoris as $row)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td>
                      <a class="btn btn-info btn-sm" href="{{url('master-data/kategori-pembukuan/'.$row->id.'/edit')}}">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                      </a>
                      <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="deleteConfirm('{{$row->id}}')">
                          <i class="fas fa-trash"></i>  Delete
                      </a>

                      <form id="delete-form-{{$row->id}}" action="{{url('/master-data/kategori-pembukuan'.'/'. $row->id)}}" method="POST">
                        @csrf
                        @method('delete')
                      </form>
                    </td>
                  </tr>
                @endforeach
            </table>
           
        </div>
    </div>
    </div>
    </section>
@endsection

@push('js')
<script>
  function deleteConfirm (id){
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {

        $('#delete-form-'+id).submit();
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      }
    })
  }
</script>
@endpush
