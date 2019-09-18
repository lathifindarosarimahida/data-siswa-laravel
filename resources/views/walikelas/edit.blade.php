@extends('template')

@section('main')
<div id="walikelas">
    <h2>Edit Walikelas</h2>

    <form action="{{ url('walikelas/' .$walikelas->id .'/update')}}" method="POST" enctype="multipart/form-data">
    
    {{ csrf_field() }}

    <div class="form-group">
        <label for="id_guru" class="control-label">Nama Guru</label>
        <select required class="form-control col-form-label text-center" type="text" name="id_guru">
            @foreach($guru as $g)
            <option value="{{$g->id}}">{{$g->nama_guru}}</option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group">
        <label for="id_kelas" class="control-label">Nama Kelas</label>
        <select required class="form-control col-form-label text-center" type="text" name="id_kelas">
            @foreach($kelas as $k)
            <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
            @endforeach
        </select>
    </div>

    




    <!-- <div class="form-group">
        <label for="id_guru" class="control-label">Nama Guru</label>
        @if(!empty($guru))
        <select class="form-control" name="id_guru">
        @foreach($guru as $g)
        <option value="{{$g->id_guru}}">{{$g->nama_guru}}</option>
        @endforeach
        </select>
        @else
        <p>tidak ada data guru</p>
        @endif
    </div>

    <div class="form-group">
        <label for="id_kelas" class="control-label">Nama Kelas</label>
        @if(!empty($kelas))
        <select name="id_kelas" class="form-control">
        @foreach($kelas as $k)
        <option value="{{$k->id_kelas}}">{{$k->nama_kelas}}</option>
        @endforeach
        </select>
        @else
        <p>tidak ada data kelas</p>
        @endif
    </div> -->

    
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    @stop




