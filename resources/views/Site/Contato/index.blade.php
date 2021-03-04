@extends('Template.template-base')

@section('title', 'Aulas')

@section('content_header')<div class="container-fluid">
    <div class="col-md-12">
    <h1>Horarios de aulas</h1>

@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-12">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Professor</th>
      <th scope="col">Telefone</th>
      <th scope="col">Bairro</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Sensei - PC</td>
      <td></td>
      <td>CEAB </td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Sensei Davi</td>
      <td></td>
      <td>Ana Jacinta</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Sensei Guilherme</td>
      <td></td>
      <td>Jd. Bongiovani</td>
      
    </tr>
  </tbody>
</table>



        </div>
    </div>
</div>
@stop