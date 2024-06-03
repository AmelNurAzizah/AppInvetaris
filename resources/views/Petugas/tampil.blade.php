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
           <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
           <li class="breadcrumb-item active">Petugas</li>
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
              <h2 class="card-title">Data Petugas</h2>
              <a href="createP" class="btn btn-info" style="float: right">Tambah</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>No</th>
                 <th>Nama Petugas</th>
                 <th>Username</th>
                 <th>Password</th>
                 <th>Level</th>
                 <th>OPSI</th>
                </tr>
                </thead>
                <tbody>
                  
                  @foreach ($data as $d)
               <tr>
                  <th>{{ $loop->iteration  }}</th>

                  <th>{{ $d->nama_petugas }}</th>

                  <th>{{ $d->username }}</th>

                  <th>{{ $d->password }}</th>

                  <th>{{ $d->level }}</th>

                  <th>
                    <a href="/editP{{ $d->id_petugas }}" class="btn btn-warning">Edit</a>
                    <a href="/petugas/hapus{{ $d->id_petugas}}" class="btn btn-danger">Hapus</a>
                  </th>

               </tr>
                  @endforeach
                 
                </tbody>

              </table>
            </div>
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
