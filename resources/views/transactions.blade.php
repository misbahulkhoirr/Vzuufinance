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
        {{-- <div class="card-header">
            <a href="{{url('/master-data/bank/create')}}" title="Create User" class="btn btn-warning"><span class="fas fa-plus"></span> Tambah</a>
        </div> --}}
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
                        <th>Date </th>
                        <th>Name </th>
                        <th>Account </th>
                        <th>Categori </th>
                        <th>Debit </th>
                        <th>Credit </th>
                        <th>Descriptions </th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                  @foreach ($transactions as $row)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{date('d M Y', strtotime($row->date))}}</td>
                    <td>{{$row->user->name}}</td>
                    <td>{{$row->account->account_number}}</td>
                    <td>{{$row->category->name}}</td>
                    <td>{{$row->debit}}</td>
                    <td>{{$row->credit}}</td>
                    <td>{{$row->description}}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{url('master-data/bank/'.$row->id.'/edit')}}">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                      </a>
                      <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="deleteConfirm('{{$row->id}}')">
                          <i class="fas fa-trash"></i>  Delete
                      </a>

                      <form id="delete-form-{{$row->id}}" action="{{url('/master-data/bank'.'/'. $row->id)}}" method="POST">
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
