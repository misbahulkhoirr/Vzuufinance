@extends('layouts.admin')
@section('title','Setting')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Pengaturan Umum</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('/setting')}}">Pengaturan Umum</a></li>
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
    <div class="row">
      <div class="col-md-5">
      <form method="POST" action="{{url('/setting/general/'.$setting->id)}}" enctype="multipart/form-data">
        <div class="card card-primary card-outline">
          <div class="card-body">
              @csrf
              @method('put')
              <div class="form-group">
                <label for="inputUsername">Nama Aplikasi</label>
                <input type="text" class="form-control @error('app_name') is-invalid @enderror" value="{{old('app_name', $setting->app_name)}}" name="app_name" id="inputUsername" placeholder="Enter app name">
                @error('app_name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="inputFile">Logo</label>
                <div class="input-group mb-2">
                  <input type="file" class="dropify @error('logo') is-invalid @enderror" name="logo" id="inputFile" data-default-file="{{Storage::url($setting->logo)}}" />
                </div>
                @error('logo')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <!-- /.card-body -->
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
        </form>
      </div>
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
