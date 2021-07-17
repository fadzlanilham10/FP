@extends('template/admin')




@section('title')
    Sispeg | Data Pegawai
@endsection
@section('cari')
    {{ old('cari') }}
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
            <h1>Data Pegawai</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href="/tambah-data"><button type="button"  class="btn btn-primary"><i class="fas fa-plus"></i> Tamabah Pegawai</button></a> &emsp; <a href="/data-pegawai/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a> </h3>

                <h3 class="card-title"></h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Pegawai</th>
                    
                    <th><center>Detail</center></th>
                    <th><center>Update</center></th>
                    <th><center>Delete</center></th>

                  </tr>
                  </thead>
                  @foreach($data as $i)
                  <tbody>
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $i->nip}}</td>
                    <td>{{ $i->nama}}</td>
                    
                    <td><center><a href="/detail/{{$i->id}}"><i class="fas fa-info-circle"></i></a></center> </td>
                    <td><center><a href="/ubah/{{$i->id}}"><i class="fas fa-edit"></i></a></center></td>
                    <td><center><a href="/hapus/{{$i->id}}"><i class="fas fa-trash"></i></a></center></td>
                  </tr>
                </tbody>
                 @endforeach

                </table>
          </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
        <!-- /.card-body -->

        {{ $data->links() }}
</div>    
    @endsection