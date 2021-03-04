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
      <th scope="col">Local</th>
      <th scope="col">Horario</th>
      <th scope="col">Professor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Semepp</td>
      <td>19:00 - 21:30</td>
      <td>Sensei - PC</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ana Jacinta</td>
      <td>19:00 - 20:00</td>
      <td>Sensei Davi</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Heal Fit Presidente Prudente</td>
      <td>18:00 - 19:30</td>
      <td>Sensei Guilherme</td>
    </tr>
  </tbody>
</table>



        </div>
    </div>
</div>
@stop