@extends('locations.layout')
@section('content')
<div class="card">
  <div class="card-header">locations Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Lieu : {{ $locations->type }}</h5>
        <p class="card-text">Cin : {{ $locations->nombres }}</p>
        <p class="card-text">dateDebut : {{ $locations->couleurs }}</p>
        <p class="card-text">dateFin : {{ $locations->prix }}</p>
  </div>
      
    </hr>
  
  </div>
</div>