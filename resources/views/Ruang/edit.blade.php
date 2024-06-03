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
           <li class="breadcrumb-item"><a href="/Ruang">{{ $judul }}</a></li>
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
              <h2 class="card-title">Edit Data Ruang</h2><br>
              <table id="example1" class="table table-bordered table-striped">
                @foreach ($ruangs as $d)
            <form action="updater" method="POST" class="form-horizontal">
              @csrf
              <input type="hidden" name="id" value="{{ $d->id}}">
              <div class="card-body">
                <div class="mb-3 row">
                  <label for="nama_ruang" class="col-sm-2 col-form-label">Nama Ruang</label>
                  <div class="col-sm-10">
                      <input type="text" name="nama_ruang" class="form-control" placeholder="nama_ruang">
                  </div>
              </div>
              <div class="mb-3 row">
                <label for="kode_ruang" class="col-sm-2 col-form-label">Kode Ruang</label>
                    <div class="col-sm-10">
                      <input type="number" name="kode_ruang" class="form-control" placeholder="kode_ruang">
                    </div>
            </div>
            <div class="mb-3 row">
              <label for="keterangan" class="control-label col-sm-2">Keterangan</label>
              <div class="col-sm-10">
                  <input type="text" name="keterangan" class="form-control" placeholder="keterangan">
              </div>
          </div>
                  <div class="d-grid gap-2 d-md-block">
                      <input class="btn" style="background-color:rgb(72, 179, 211);" type="submit" name="submit" value="Simpan">
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
