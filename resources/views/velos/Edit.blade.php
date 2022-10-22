@extends('velos.layout')
@section('content')
<div class="card">
  <div class="card-header">Velos Page</div>
  <div class="card-body">
      
      <form action="{{ url('velo/' .$velos->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$velos->id}}" id="id" />
        <label>Type</label></br>
        <input type="text" name="type" id="type" value="{{$velos->type}}" class="form-control"></br>
        <label>Nombre</label></br>
        <input type="text" name="nombres" id="nombres" value="{{$velos->nombre}}" class="form-control"></br>
        <label>Couleur</label></br>
        <input type="text" name="couleurs" id="couleurs" value="{{$velos->couleur}}" class="form-control"></br>
        <label>Prix</label></br>
        <input type="text" name="prix" id="prix" value="{{$velos->prix}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop