@extends('layout/main');


@section('title', 'Data mahasiswa')


@section('container')
<div class="container">
<div class="row">
<div class="col-10">
</div>
  <h1>Data Mahasiswa</h1>

  <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">NIM</th>
      <th scope="col">NAMA LENGKAP</th>
      <th scope="col">AKSI</th>
      </tr>
      </thead>
      <tbody>
      <tr>
          <th sope="row">1</th>
         <td>ID</td>
         <td>G64102004</td>
         <td>Fridolin F.Paiki</td>
         <td>
            <a href="" class="badge badge-succes">edit</a>
            <a href="" class="badge badge-danger">delete</a>
         </td>
  
          </tr>
          <tbody>
      </table>
</div>
</div>
@endsection

   