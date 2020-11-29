@extends('layout/main');


@section('title', 'Data mahasiswa')


@section('container')
<div class="container">
<div class="row">
<div class="col-10">
</div>
  <h1>Data Mahasiswa</h1>

  <table class="table">
    <thead class="thead-white">
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
         <td></td>
         <td>G64102004</td>
         <td>Fridolin F.Paiki</td>
         <td>
            <a href="" class="badge badge-succes">detail</a>
            <a href="" class="badge badge-success">edit</a>
            <a href="" class="badge badge-danger">delete</a>

            <td>
       <tr>
            <th sope="row">2</th>
         <td></td>
         <td>201265003</td>
         <td>Andi Febri Cahyo</td>
         <td>
            <a href="" class="badge badge-">detial</a>
            <a href="" class="badge badge-success">edit</a>
            <a href="" class="badge badge-danger">delete</a>
         </td>
  
          </tr>
        
          <tbody>
      </table>
</div>
</div>
@endsection