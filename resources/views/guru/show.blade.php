@extends('template')

@section('main')
<div id="guru">
    <h2 align="center"><br> Detail Guru</h2>

    <table class="table table-striped">
    <br>
    <tr>
        <img src="{{    asset('img/'.$guru->avatar) }}" width="200px" height="200px" style="display: block;margin:auto;" >
    
    </tr>
    <br>
    <tr>
        <th>NIP</th>
        <td>{{ $guru->nip }}</td>
    </tr>

    <tr>
        <th>Nama</th>
        <td>{{ $guru->nama_guru }}</td>
    </tr>

    <tr>
        <th>Tanggal Lahir</th>
        <td>{{ $guru->tanggal_lahir }}</td>
    </tr>

    <tr>
        <th>Jenis Kelamin</th>
        <td>{{ $guru->jenis_kelamin }}</td>
    </tr>
</table>
</div>

@stop
