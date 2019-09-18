@extends('template')

@section('main')
<div id="siswa">
<br>
    <h2 align="center">Siswa</h2>
<br>
<br>

    @if (!empty($siswa_list))
    <table class="table">
    <thead>
    <tr>
    
        <th>NO</th>
        <th>NISN</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Kelas</th>
        <th>Aksi</th>
    
    </tr>
    </thead>
    <tbody>

    @php $i=1 @endphp
    @foreach($siswa_list as $siswa)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{$siswa->nisn}}</td>
        <td>{{$siswa->nama_siswa}}</td>
        <td>{{$siswa->tanggal_lahir}}</td>
        <td>{{$siswa->jenis_kelamin}}</td>
        <td>{{! empty($siswa->kelas->nama_kelas)? $siswa->kelas->nama_kelas : '-'}}</td>

            <td><a class="btn btn-success btn-sm" href="{{ url('siswa/'. $siswa->id) }}">Detail</a></td>
            <td><a class="btn btn-warning btn-sm" href="{{ url('siswa/'. $siswa->id) . '/edit'}}">Edit</a></td>
            <td><a class="btn btn-danger btn-sm" href="{{ url('siswa/'. $siswa->id) . '/delete'}}">Delete</a></td>

        </tr>
        @endforeach
    </tbody>    
    </table>
    
   <center><a href="{{ url('siswa/create') }}" class="btn btn-primary"> Tambah Siswa</a></center>  
<br>
    <center><a href="{{url('siswa/cetak_pdf')}}" class="btn btn-primary" target="_blank">CETAK PDF<a><center>
    
    @else
    <p>Tidak ada data siswa.</p>
    @endif
</div>
@stop

@section('footer')
    <div id="footer">
    <p>&copy;2019 Belajar_Laravel</p>
    </div>
@stop




