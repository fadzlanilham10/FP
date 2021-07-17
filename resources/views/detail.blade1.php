@extends('template/admin')




@section('title')
    Sispeg | Detail
@endsection
@section('nav2')
    active
@endsection
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Data Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-6">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-6 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  <b>Detail Pegawai</b>
                </div>
                <div class="card-body pt-6">
                  <div class="row">
                  	
                    <div class="col-7">
                     
                      <ul class="ml-4 mb-7 fa-ul text-muted">
                      	<li class=""><span class="fa-li"><i class="fas fa-id-card"></i></span> Nomor Pegawai: {{ $data[0]->nip}}</li>
                      	<li class=""><span class="fa-li"><i class="fas fa-id-card"></i></span> Nama Lengkap : {{ $data[0]->nama}}</li>
                        <li class=""><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; {{ $data[0]->alamat}}</li>
                        
                      </ul>
                    </div>

                  </div>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>

        </div>

        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

@endsection