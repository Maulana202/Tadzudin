@extends('teamplates')

@section('title','Daftar Siswa')

@section('container')

<div class="container">
<h1>Hellow , Siswa</h1>

<table class='table'>
<thead class='thead-dark'>
<tr>
<th scope="col">#</th>
<th scope="col">Nama</th>
<th scope="col">NIS</th>
<th scope="col">Email</th>
<th scope="col">Jurusan</th>
<th scope="col">Aksi</th>
</tr>
</thead>
<tbody>
@foreach($siswa as $siswa)
<tr>
 <th scope="row"> {{ $loop->iteration }} </th>
 <td>{{ $siswa->nama }}</td>
 <td>{{ $siswa->nis }}</td>
 <td>{{ $siswa->email }}</td>
 <td>{{ $siswa->jurusan }}</td>
 <td>
 <a href="#" class="badge badge-success">Edit</a>
 <a href="#" class="badge badge-danger">Delet</a>
 </td>
</tr>

@endforeach
</tbody>
</table>
</div>

@endsection