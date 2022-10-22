@extends('velos.layout')
@section('content')
<div class="card">
  <div class="card-header">Velos Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Type : {{ $velos->type }}</h5>
        <p class="card-text">Nombres : {{ $velos->nombres }}</p>
        <p class="card-text">Couleurs : {{ $velos->couleurs }}</p>
        <p class="card-text">Prix : {{ $velos->prix }}</p>
  </div>
      
    </hr>
  
  </div>
</div>