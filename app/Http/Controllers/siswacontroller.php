<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Siswa;
use App\kelas;
use PDF;

class siswacontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function siswa() {
        $halaman = 'siswa';
        $siswa_list= Siswa::all();
        return view('siswa.index', compact('halaman', 'siswa_list'));
    }
    public function cetak_pdf()
    {
        $siswa = Siswa::all();
        $pdf = PDF::loadview('siswa_pdf',['siswa'=> $siswa]);
        return $pdf->download('laporan-siswa-pdf');
    }

    public function create(){
        $halaman ='siswa';
        $kelas = Kelas::all();
        return view('siswa.create', compact('halaman', 'kelas'));
    }

    public function store(Request $request){
        Siswa::create($request->all());
        return redirect('siswa');
    }

    public function show($id){
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('halaman', 'siswa'));
    }

    public function edit($id){
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        $kelas = kelas::all();
        return view('siswa.edit', compact('halaman', 'siswa', 'kelas'));
    }

    public function update($id, Request $request) {
        // dd($request->all());
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('img/',$request->file('avatar')->getClientOriginalName());
            $siswa->nisn = $request->nisn;
            $siswa->nama_siswa = $request->nama_siswa;
            $siswa->tanggal_lahir = $request->tanggal_lahir;
            $siswa->jenis_kelamin = $request->jenis_kelamin;
            $siswa->id_kelas = $request->id_kelas;
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        } else {
            $siswa->nisn = $request->nisn;
            $siswa->nama_siswa = $request->nama_siswa;
            $siswa->tanggal_lahir = $request->tanggal_lahir;
            $siswa->jenis_kelamin = $request->jenis_kelamin;
            $siswa->id_kelas = $request->id_kelas;
            $siswa->save();
        }
        
        return redirect('siswa');
    }

    public function delete($id){
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');
    }

    public function profile($id){
        $siswa = \App\Siswa::find($id);
        return view ('siswa.profile', ['siswa' => $siswa]);
    }

    public function cetakpdf(){
        $siswa_list = Siswa::all();
        $pdf = PDF::loadview('siswa.cetakpdf',compact('siswa_list'));
        return $pdf->download('laporan-data-siswa-pdf');
    }
    
    public function cetak()
    {
        $siswa_list = Siswa::all();
        return view ('siswa.cetakpdf', compact('siswa_list'));
    }
    
}