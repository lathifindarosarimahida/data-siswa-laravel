<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <center><h1>Laporan Data Siswa</h1><center>
    @if(!empty($siswa_list))
    <center>

    <table class="table table-hover" style="width: 85%;">
    <thead>
    <tr>
        <th>NISN</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Kelas</th>
    </tr>
    </thead>

    @foreach($siswa_list as $siswa)
    <tr>
        <td>{{$siswa->nisn}}</td>
        <td>{{$siswa->nama_siswa}}</td>
        <td>{{$siswa->tanggal_lahir}}</td>
        <td>{{$siswa->jenis_kelamin}}</td>
        <td>{{!empty($siswa->kelas->nama_kelas) ? $siswa->kelas->nama_kelas : '-'}}</td>
    </tr>
    @endforeach

</tbody>
</table>
</center>
    
    @else
    <p>tidak ada data siswa</p>
    
</body>
@endif

</html>