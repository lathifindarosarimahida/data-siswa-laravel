@extends ('template')

@section('main')
<div id="siswa">
<br>
    <h2 align="center"> Tambah Siswa</h2>
<br>
<br>
    

    <form action="{{ url('siswa') }}" method="post">
    @csrf
    {{ csrf_field() }}
    <div class="form-group">
    <label for="nisn" class="control-label">NISN</label>
    <input name="nisn" type="text" class="form-control">
</div>

<div class="form-group">
    <label for="nama_siswa" class="control-label">Nama</label>
    <input name="nama_siswa" type="text" class="from-control">
</div>

<div class="form-group">
    <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
    <input name="tanggal_lahir" type="date" class="form-control">
</div>

<div cass="form-group">
    <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>

<div class="form-check">
    <input class="from-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" checked>
    <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
</div>

<div class="form-check">
    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">
    <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>
</div>
</div>

<div class="form-group">
        <label for="id_kelas" class="control-label">Kelas</label>
        @if(!empty($kelas))
        <select class="form-control" name= "id_kelas">
        @foreach ($kelas as $k)
        <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
        @endforeach
        </select>

        @else
        <p> Tidak ada data kelas.</p>

        @endif


    </div>

<div class="form-group">
        <label for="avatar" class="control-label">Gambar</label>
        <input name="avatar" type="file" class="form-control">
    </div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop