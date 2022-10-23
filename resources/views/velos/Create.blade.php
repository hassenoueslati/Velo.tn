@extends("baseBackOffice")
@section('Velo')
    active
@endsection
@section('content')
<div class="card">
  <div class="card-header">Velos Page</div>
  <div class="card-body">
      
      <form action="{{ url('velo') }}" method="post">
        {!! csrf_field() !!}
        <label>Type</label></br>
        <input type="text" name="type" id="type" class="form-control"></br>
        <label>Nombre</label></br>
        <input type="text" name="nombres" id="nombres" class="form-control"></br>
        <label>Couleur</label></br>
        <input type="text" name="couleurs" id="couleurs" class="form-control"></br>
        <label>Prix</label></br>
        <input type="text" name="prix" id="prix" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop