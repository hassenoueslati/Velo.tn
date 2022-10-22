@extends('locations.layout')
@section('content')
<div class="card">
  <div class="card-header">Location Page</div>
  <div class="card-body">
      
      <form action="{{ url('location/' .$locations->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$locations->id}}" id="id" />
        <label>Lieu</label></br>
        <input type="text" name="lieu" id="lieu" value="{{$locations->lieu}}" class="form-control"></br>
        <label>Cin</label></br>
        <input type="text" name="cin" id="cin" value="{{$locations->cin}}" class="form-control"></br>
        <label>Date de debut</label></br>
        <input type="date" name="dateDebut" id="dateDebut" value="{{$locations->dateDebut}}" class="form-control"></br>
        <label>Date Fin</label></br>
        <input type="date" name="dateFin" id="dateFin" value="{{$locations->dateFin}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop