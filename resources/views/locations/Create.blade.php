@extends('locations.layout')
@section('content')
<div class="card">
  <div class="card-header">Locations Velo</div>
  <div class="card-body">
      
      <form action="{{ url('location') }}" method="post">
        {!! csrf_field() !!}
        <label>lieu</label></br>
        <input type="text" name="lieu" id="lieu" class="form-control"></br>
        <label>Cin</label></br>
        <input type="text" name="cin" id="cin" class="form-control"></br>
        <label>Date Debut</label></br>
        <input type="date" name="dateDebut" id="dateDebut" class="form-control"></br>
        <label>Date Fin</label></br>
        <input type="date" name="dateFin" id="DateFin" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop