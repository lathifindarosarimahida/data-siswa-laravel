@extends ('template')

@section('main')
<div id="kelas">
<br>
    <h2 align="center">Tambah Kelas</h2>
<br>
<br>
    

    <form action="{{ url('kelas/store') }}" method="POST">
    
    {{ csrf_field() }}

<!-- <div class="form-group">
    <label for="id_kelas" class="control-label">ID Kelas</label>
    <input name="id_kelas" type="text" class="from-control">
</div> -->

<div class="form-group">
    <label for="nama_kelas" class="control-label">Kelas</label>
    <input name="nama_kelas" type="text" class="from-control">
</div>


<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop