<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\List_;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gambar;
use PDF;
use App\Models\Hasil;

class PegawaiController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        // $hasil = Post::orderBy('id', 'desc')->paginate(4);
        // return view('/isi', ['data' => $hasil]);
        $hasil = DB::table('pegawai')->distinct('id')->count('id');
         
        return view('isi', ['data' => $hasil]);
    }
    public function list()
    {
          // mengambil data dari table pegawai
        // $userId = auth()->user()->id;
        // $hasil = Post::where(['user_id' => $userId])
        //             -> orderBy('id', 'desc')
        //             ->paginate(4);
        // return view('data-pegawai', ['data' => $hasil]);
        
        $hasil = DB::table('pegawai')->paginate(10);
        return view('data-pegawai', ['data' => $hasil]);
    }

    public function tambah(){
        $gambar = Gambar::get();
        return view('tambah-data',['gambar' => $gambar]);
    }


    public function simpan(Request $req)
    {
        $this->validate($req, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);
 
        // menyimpan data file yang diupload ke variabel $file
        $file = $req->file('file');
 
        $nama_file = time()."_".$file->getClientOriginalName();
 
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);


        DB::insert(
            'insert into pegawai (nip,nama, alamat, file) values (?, ?, ?, ?)',
            [$req->nip, $req->nama, $req->alamat, $nama_file]
        );
        $hasil = DB::table('pegawai')->paginate(10);
        return view('data-pegawai', ['data' => $hasil]);
    }







    public function hapus($req)
    {
        Log::info('proses hapus dengan id=' . $req);
        DB::delete('delete from pegawai where id = ?', [$req]);

        $hasil = DB::table('pegawai')->paginate(10);
        return view('data-pegawai', ['data' => $hasil]);
    }
    public function ubah($req)
    {
        $hasil = DB::select('select * from pegawai where id = ?', [$req]);
        return view('ubah-data', ['data' => $hasil]);
    }
    public function rubah(Request $req)
    {
        
        
        Log::info($req);
        DB::update(
            'update pegawai set ' .
                'nip=?, ' .
                'nama=?, ' .
                'alamat=?, ' .
                'file=? where id=? ',
            [
                $req->nip,
                $req->nama,
                $req->alamat,
                $req->file,
                $req->id
            ]
        );
        $hasil = DB::table('pegawai')->paginate(10);
        return view('data-pegawai', ['data' => $hasil]);
    }
    public function detail($req)
    {   //DB::table('pegawai')->where('id', '$req')->paginate(10);
    //$hasil = DB::table('pegawai')->where('id', '$req')->paginate(10);
        $hasil = DB::select('select * from pegawai where id = ?', [$req]);


        return view('detail', ['data' => $hasil]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table pegawai sesuai pencarian data
        $hasil = DB::table('pegawai')
        ->where('nama','like',"%".$cari."%")
        ->paginate(10);
 
            // mengirim data pegawai ke view index
        return view('data-pegawai', ['data' => $hasil]);
 
    }



    public function cetak_pdf()
    {
        set_time_limit(300);
        $pegawai = Gambar::all();
 
        $pdf = PDF::loadview('pegawai_pdf',['pegawai'=>$pegawai]);
       
        return $pdf->stream();
    }


}
