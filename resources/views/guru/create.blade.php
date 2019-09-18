@extends ('template')

@section('main')
<div id="siswa">
    <h2>Tambah Guru</h2>

    <form action="{{ url('guru') }}" method="post">
    @csrf
    {{ csrf_field() }}
    <div class="form-group">
    <label for="nip" class="control-label">NIP</label>
    <input name="nip" type="text" class="form-control">
</div>

<div class="form-group">
    <label for="nama_guru" class="control-label">Nama</label>
    <input name="nama_guru" type="text" class="from-control">
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

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop