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
          <table border="0" width="600" cellpadding="0" cellspacing="0">
          
            <tr bgcolor="#e7e7e7">
              <td width="150">Nama Lengkap</td>
              <td width="250">{{ $data[0]->nama}}</td>
              <!-- <td rowspan="4"><img src="{{ url('/data_file/logo.jpg') }}" width="200"></td> -->
              <td rowspan="4"><img src="{{$data[0]->file}}" width="200"></td>
            </tr>
            <tr bgcolor="#e7e7e7">
              <td>NIP</td>
              <td>{{ $data[0]->nip}}</td>
              
            </tr>
            <tr bgcolor="#e7e7e7">
              <td>Alamat</td>
              <td>{{ $data[0]->alamat}}</td>
            </tr>
          </table>

        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

@endsection