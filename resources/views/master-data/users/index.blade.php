@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengguna</li>
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
            <a href="{{url('/master-data/users/create')}}" title="Create User" class="btn btn-warning"><span class="fas fa-plus"></span> Tambah</a>
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
                        <th>Photo</th>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Aktivitas Terakhir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                @foreach ($users as $key => $user)
                      <tr>
                        <td>{{$key + 1}}</td>
                        <td>
                        <ul class="list-inline">
                              <li class="list-inline-item">
                                    @if ($user->photo)
                                        <img src="{{Storage::url($user->photo)}}" alt="Avatar" class="table-avatar"/>
                                    @else
                                        <img src="https://ui-avatars.com/api/?name={{$user->full_name}}&color=7F9CF5&background=EBF4FF" alt="Avatar" class="table-avatar"/>
                                    @endif
                              </li>
                          </ul> 
                        </td>
                        <td>{{$user->full_name}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{ $user->role->name}}</td>
                        <td>{{ $user->last_activity}}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{url('master-data/users/'.$user->id.'/edit')}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="deleteConfirm('{{$user->id}}')">
                              <i class="fas fa-trash"></i>  Delete
                          </a>

                          <form id="delete-form-{{$user->id}}" action="{{url('/master-data/users'.'/'. $user->id)}}" method="POST">
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
