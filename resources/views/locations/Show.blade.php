@extends("baseBackOffice")
@section('Location')
    active
@endsection
@section('content')
<div class="card">
  <div class="card-header">locations Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Lieu : {{ $locations->lieu }}</h5>
        <p class="card-text">Cin : {{ $locations->cin }}</p>
        <p class="card-text">dateDebut : {{ $locations->dateDebut }}</p>
        <p class="card-text">dateFin : {{ $locations->dateFin }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
@stop