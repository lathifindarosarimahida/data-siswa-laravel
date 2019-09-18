@extends('template')

@section('main')
<div id="walikelas">
    <h2 align="center"><br> Detail Siswa</h2>

    <table class="table table-striped">
    <br>
    <tr>
        <th>Guru</th>
        <td>{{! empty($walikelas->guru->nama_guru)? $walikelas->guru->nama_guru : '-'}}</td>
    </tr>
    <tr>
        <th>Kelas</th>
        <td>{{! empty($walikelas->kelas->nama_kelas)? $walikelas->kelas->nama_kelas : '-'}}</td>
    </tr>
    
</table>
</div>

@stop
