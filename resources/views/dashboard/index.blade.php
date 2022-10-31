@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        Selamat datang {{auth()->user()->name}}!
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <!-- Total Project -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>#</h3>

            <p>Total #</p>
          </div>
          <div class="icon">
            <i class="fas fa-calendar-check"></i>
          </div>
        </div>
      </div>
      <div class="col">
        <!-- small card -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>#</h3>

            <p>Total #</p>
          </div>
          <div class="icon">
            <i class="fas fa-file-signature"></i>
          </div>
        </div>
      </div>
      <div class="col">
        <!-- small card -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>#</h3>

            <p>Total #</p>
          </div>
          <div class="icon">
            <i class="fas fa-file-signature"></i>
          </div>
        </div>
      </div>
      <div class="col">
        <!-- small card -->
        <div class="small-box bg-badge badge-secondary">
          <div class="inner">
            <h3>#</h3>

            <p>Total #</p>
          </div>
          <div class="icon">
            <i class="fas fa-plus"></i>
          </div>
        </div>
      </div>
        <div class="col">
        <!-- small card -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>#</h3>

            <p>Total #</p>
          </div>
          <div class="icon">
            <i class="fas fa-calendar-times"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="card card-outline card-primary">
      <div class="card-header">
        <b>Title</b>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Tanggal</th>
              <th>#</th>
              <th>#</th>
              <th>#</th>
              <th>#</th>
              <th>#</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection