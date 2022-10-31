@extends('layouts.admin')
@section('title','Edit User')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item"><a href="{{url('/users')}}">Pengguna</a></li>
              <li class="breadcrumb-item active">Edit Pengguna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

    <div class="card">
            <form method="POST" action="{{url('/master-data/users/'.$user->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{old('username', $user->name)}}" name="username" id="inputUsername" placeholder="Enter username">
                     @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                   <div class="form-group">
                    <label for="inputFullName">Nama Lengkap</label>
                    <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{old('full_name', $user->full_name)}}" id="inputFullName" placeholder="Enter full name">
                     @error('full_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="selectRole">Role</label>
                        <select class="form-control  @error('role') is-invalid @enderror" name="role" id="selectRole">
                          <option value="">Select</option>
                            @foreach ($roles as $role)
                                 <option value="{{$role->id}}" {{old('role', $user->role_id) == $role->id ? 'selected' : '' }}>{{$role->name}}</option>
                            @endforeach
                        </select>
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="inputPassword" placeholder="Password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="inputFile">Photo</label>
                    <div class="input-group mb-2">
                      <input type="file" class="dropify @error('photo') is-invalid @enderror" name="photo" id="inputFile" data-default-file="{{Storage::url($user->photo)}}" />
                    </div>
                     @error('photo')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
        </div>
    </div>
    </section>
@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.dropify').dropify();
</script>
@endpush
