@extends('template/admin')




@section('title')
    Sispeg | Ubah Data
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
            <h1>Form Ubah Data</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/ubah" method="POST">
                <div class="card-body">

                  {{ csrf_field() }}
 
                  <div class="form-group">
                    <label for="nip">Nomor Induk Pegawai</label>
                    <input type="text" class="form-control" id="nip" name="nip" value="{{ $data[0]->nip}}">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$data[0]->nama}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat">{{$data[0]->alamat}}</textarea>
                  </div>

                  <div class="form-group">
                    <b>Unggah Kartu Pegawai</b><br/>
                    <input type="file" name="file" value="{{ $data[0]->file}}">
                  </div>

                </div>
                <!-- /.card-body -->
 <input type="hidden" value="{{$data[0]->id}}" id="id" name="id">
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


@endsection