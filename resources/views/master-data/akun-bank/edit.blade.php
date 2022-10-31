@extends('layouts.admin')
@section('title','Create User')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
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
              <li class="breadcrumb-item"><a href="/">Home</a></li>
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

            <form method="POST" action="{{url('/master-data/akun-bank/'.$akun_bank->id)}}">
                @csrf
                @method('put')
                <div class="card-body">
                  <div class="form-group">
                    <label for="selectBank">Nama Bank</label>
                        <select class="form-control  @error('bank_id') is-invalid @enderror" name="bank_id" id="selectRole">
                          <option value="">Select</option>
                            @foreach ($banks as $row)
                                 <option value="{{$row->id}}" {{old('bank_id',$akun_bank->bank_id) ==  $row->id ? 'selected' : '' }}>{{$row->name}}</option>
                            @endforeach
                        </select>
                    @error('bank_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="inputaccount_number">Account Number</label>
                    <input type="number" class="form-control @error('account_number') is-invalid @enderror" name="account_number" value="{{old('account_number',$akun_bank->account_number)}}" id="inputaccount_number" placeholder="Enter nama bank">
                     @error('account_number')
                        <div class="invalid-feedback">{{ $message }}</div>
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

