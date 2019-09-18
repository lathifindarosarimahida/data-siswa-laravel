@extends('template')

@section('main')
<div id="siswa">
<br>
    <h2 align="center">Guru</h2>
<br>

    @if (!empty($guru_list))
    <table class="table">
    <thead>
    <tr>
        <!-- <th>No</th> -->
        <th>NIP</th>
        <th>Nama</th>
        <th>Tanggal lahir</th>
        <th>JK</th>
        <th>Aksi<th>
    </tr>
    </thead>

    <tbody>
        @foreach($guru_list as $guru)
        <tr>
            <td>{{$guru->nip}}</td>
            <td>{{$guru->nama_guru}}</td>
            <td>{{$guru->tanggal_lahir}}</td>
            <td>{{$guru->jenis_kelamin}}</td>

            <td><a class="btn btn-success btn-sm" href="{{ url('guru/'. $guru->id) }}">Detail</a></td>
            <td><a class="btn btn-warning btn-sm" href="{{ url('guru/'. $guru->id) . '/edit'}}">Edit</a></td>
            <td><a class="btn btn-danger btn-sm" href="{{ url('guru/'. $guru->id) . '/delete'}}">Delete</a></td>

        </tr>
        @endforeach
    </tbody>    
    </table>
    
   <center><a href="{{ url('guru/create') }}" class="btn btn-primary"> Tambah Guru</a></center>  

    @else
    <p>Tidak ada data guru.</p>
    @endif
</div>
@stop

@section('footer')
    <div id="footer">
    <p>&copy;2019 Belajar_Laravel</p>
    </div>
@stop




