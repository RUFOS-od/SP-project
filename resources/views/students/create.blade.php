@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">

      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" class="form-control"></br>
        <label>Prénom(s)</label></br>
        <input type="text" name="prenom" id="prenom" class="form-control"></br>
        <label>matricule</label></br>
        <input type="text" name="matricule" id="matricule" class="form-control"></br>
        <label>Age</label></br>
        <input type="number" name="age" id="age" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
