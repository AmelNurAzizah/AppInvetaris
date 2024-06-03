@extends('layout')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1 class="m-0">{{ $judul }}</h1>
       </div><!-- /.col -->
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="/Petugas">{{ $judul }}</a></li>
           <li class="breadcrumb-item active">Edit</li>
         </ol>
       </div><!-- /.col -->
     </div><!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content -->
 <div class="content">
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
              <h2 class="card-title">Edit Data Petugas</h2><br>
              <table id="example1" class="table table-bordered table-striped">
                @foreach ($petugas as $d)
            <form action="updateP" method="POST" class="form-horizontal">
              @csrf
              <input type="hidden" name="id" value="{{ $d->id_petugas }}">
              <div class="card-body">
                <div class="mb-3 row">
                  <label for="nama_petugas" class="col-sm-2 col-form-label">Nama Petugas</label>
                  <div class="col-sm-10">
                      <input type="text" name="nama_petugas" class="form-control" placeholder="nama_petugas">
                  </div>
              </div>
              <div class="mb-3 row">
                <label for="username" class="col-sm-2 col-form-label"> Username</label>
                    <div class="col-sm-10">
                      <input type="text" name="username" class="form-control" placeholder="username">
                    </div>
            </div>
            <div class="mb-3 row">
              <label for="password" class="control-label col-sm-2">Password</label>
              <div class="col-sm-10">
                  <input type="text" name="password" class="form-control" placeholder="password">
              </div>
          </div>

          <div class="mb-3 row">
            <label for="level" class="control-label col-sm-2">Level</label>
            <div class="col-sm-10">
                <input type="text" name="level" class="form-control" placeholder="level">
            </div>
        </div>
                  <div class="d-grid gap-2 d-md-block">
                      <input class="btn" style="background-color:rgb(188, 213, 224);" type="submit" name="submit" value="Simpan">
                      <button class="btn btn-secondary" name="reset" type="reset">RESET</button>
                  </div>
              </div>
          </form>
          @endforeach
        </table>
                
            </div>
            <!-- /.card-header -->
            
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
       </div>
       <!-- /.col-md-6 -->
   
       <!-- /.col-md-6 -->
     </div>
     <!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>

@endsection
