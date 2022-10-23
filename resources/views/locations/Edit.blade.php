@extends("baseBackOffice")
@section('Location')
    active
@endsection

@section('head')
<link rel="icon" type="image/x-icon" href="../../assets/backOffice/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../assets/backOffice/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/backOffice/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/backOffice/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/backOffice/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/backOffice/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../../assets/backOffice/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/backOffice/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/backOffice/assets/js/config.js"></script>
@endsection
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