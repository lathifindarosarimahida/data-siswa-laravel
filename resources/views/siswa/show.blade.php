@extends('template')

@section('main')
<div id="siswa">
    <h2 align="center"><br> Detail Siswa</h2>

    <table class="table table-striped">
    <br>
    <tr>
        <img src="{{    asset('img/'.$siswa->avatar) }}" width="200px" height="250px" style="display: block;margin:auto;" >
    
    </tr>
    <br>
    <tr>
        <th>NISN</th>
        <td>{{ $siswa->nisn }}</td>
    </tr>

    <tr>
        <th>Nama</th>
        <td>{{ $siswa->nama_siswa }}</td>
    </tr>

    <tr>
        <th>Tanggal Lahir</th>
        <td>{{ $siswa->tanggal_lahir }}</td>
    </tr>

    <tr>
        <th>Jenis Kelamin</th>
        <td>{{ $siswa->jenis_kelamin }}</td>
    </tr>

    <tr>
        <th>Kelas</th>
        <td>{{! empty($siswa->kelas->nama_kelas)? $siswa->kelas->nama_kelas : '-'}}</td>
    </tr>
</table>
</div>

@stop
