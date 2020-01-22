@extends('teamplates')

@section('title','Daftar Siswa')

@section('container')

<div class="container">
<h1>Hellow , {{ $nama }}</h1>

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
<tr>
 <th scope="row">1</th>
 <td>Maulana</td>
 <td>213821421</td>
 <td>Maulana@gmail.com</td>
 <td>Rekayasa Perangkat Lunak</td>
 <td>
 <a href="#" class="badge badge-success">Edit</a>
 <a href="#" class="badge badge-danger">Delet</a>
 </td>
</tr>
</tbody>
</table>
</div>

@endsection