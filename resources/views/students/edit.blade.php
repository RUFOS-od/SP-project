@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">

      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" value="{{$students->nom}}" class="form-control"></br>
         <label>Prénom(s)</label></br>
        <input type="text" name="prenom" id="prenom" value="{{$students->prenom}}" class="form-control"></br>
        <label>Matricule</label></br>
        <input type="text" name="matricule" id="matricule" value="{{$students->matricule}}" class="form-control"></br>
        <label>Age</label></br>
        <input type="number" name="age" id="age" value="{{$students->age}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
