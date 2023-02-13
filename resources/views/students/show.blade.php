@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->nom }}</h5>
        <h5 class="card-title">Prénom(s) : {{ $students->prenom }}</h5>
        <p class="card-text">Matricule : {{ $students->matricule }}</p>
        <p class="card-text">Age : {{ $students->age }}</p>
  </div>
    </hr>
  </div>
</div>
