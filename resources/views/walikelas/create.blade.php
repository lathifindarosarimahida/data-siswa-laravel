@extends ('template')

@section('main')
<div id="walikelas">
<br>
    <h2 align="center">Tambah Walikelas</h2>
<br>
<br>

    <form action="{{ url('walikelas') }}" method="post">
    @csrf
    {{ csrf_field() }}

    <div class="form-group">
        <label for="id_guru" class="control-label">Guru</label>
        @if(!empty($guru))
        <select class="form-control" name= "id_guru">
        @foreach ($guru as $g)
        <option value="{{$g->id}}">{{$g->nama_guru}}</option>
        @endforeach
        </select>

        @else
        <p> Tidak ada data guru.</p>

        @endif


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

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop