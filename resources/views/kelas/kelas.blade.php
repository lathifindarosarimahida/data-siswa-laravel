@extends('template')

@section('main')
<div id="kelas">
<br>
    <h2 align="center">Kelas</h2>
<br>
<br>
    @if (!empty($kelas_list))
    <table class="table">
    <thead>
    <tr>
       
        <th>ID Kelas</th>
        <th>Kelas</th>
        <th>Aksi<th>
    </tr>
    </thead>

    <tbody>
        @foreach($kelas_list as $kelas)
        <tr>
            <td>{{$kelas->id}}</td>
            <td>{{$kelas->nama_kelas}}</td>

            <td><a class="btn btn-warning btn-sm" href="{{ url('kelas/'. $kelas->id) . '/edit'}}">Edit</a></td>
            <td><a class="btn btn-danger btn-sm" href="{{ url('kelas/'. $kelas->id) . '/delete'}}">Delete</a></td>

        </tr>
        @endforeach
    </tbody>    
    </table>
    
   <center><a href="{{ url('kelas/create') }}" class="btn btn-primary"> Tambah Kelas</a></center>  

    @else
    <p>Tidak ada data kelas.</p>
    @endif
</div>
@stop

@section('footer')
    <div id="footer">
    <p>&copy;2019 Belajar_Laravel</p>
    </div>
@stop




