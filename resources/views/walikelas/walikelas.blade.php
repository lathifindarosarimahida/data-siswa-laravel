@extends('template')

@section('main')
<div id="walikelas">
<br>
    <h2 align="center">Wali Kelas</h2>
<br>
<br>
    @if (!empty($walikelas_list))
    
    <table class="table">
    <thead>
    <tr>
       
        
        <th>Nama Guru</th>
        <th>Nama Kelas<th>
        <th>Aksi<th>
    </tr>
    </thead>

    <tbody>
    @php $i=1 @endphp
        @foreach($walikelas_list as $walikelas)
        <tr>
        
            
            <td>{{ ! empty($walikelas->guru->nama_guru) ? $walikelas->guru->nama_guru : '-'}}</td>
            <td>{{ ! empty($walikelas->kelas->nama_kelas) ? $walikelas->kelas->nama_kelas : '-'}}</td>

            <td><a class="btn btn-warning btn-sm" href="{{ url('walikelas/'. $walikelas->id) . '/edit'}}">Edit</a></td>
            <td><a class="btn btn-danger btn-sm" href="{{ url('walikelas/'. $walikelas->id) . '/delete'}}">Delete</a></td>

        </tr>
        @endforeach
    </tbody>    
    </table>
    
   <center><a href="{{ url('walikelas/create') }}" class="btn btn-primary"> Tambah Wali Kelas</a></center>  

    @else
    <p>Tidak ada data walikelas.</p>
    @endif
</div>
@stop

@section('footer')
    <footer class id="footer">
    <div id="container">
    <p class="text-muted" align="center">Copyright &copy; 2019 Belajar_Laravel</p>
    </div>
    </footer>
@stop




