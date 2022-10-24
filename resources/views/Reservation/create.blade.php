@extends("baseFrontOffice")
@section('head')
    <meta charset="utf-8">
    <title>Vélo.tn </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">


@endsection
@section('title')
    Post
@endsection
@section('head-content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(https://images.unsplash.com/photo-1533561052604-c3beb6d55b8d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1331&q=80);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Reservation</h1>

            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection
@section('content')

    <div class="container mt-3">
<form  method="GET" action="{{route("saveReservation")}}">
    <div class="form-group">
        <table>
            <tr>
                <td><label>Date Debut:</label></td>
                <td><input type="date" name="dateDebut" id="dateDebut" class="form-control @error('dateDebut') is-invalid @enderror"  >
                    @error('dateDebut')
                    <div class="invalid-feedback">{{ $errors ->first('dateDebut')}}</div>
                    @enderror</td>

            </tr>
            <tr>
                <td><label>Date Fin:</label></td>
                <td><input type="date" name="dateFin" id="dateFin"  class="form-control @error('dateFin') is-invalid @enderror"  >
                    @error('dateFin')
                    <div class="invalid-feedback">{{ $errors ->first('dateFin')}}</div>
                    @enderror</td>
            </tr>
            <tr>
                <td><label>Code Evenement :</label></td>
                <td><input type="number"  name="evenement_id" id="evenement_id" class="form-control @error('evenement_id') is-invalid @enderror"  >
                    @error('evenement_id')
                    <div class="invalid-feedback">{{ $errors ->first('evenement_id')}}</div>
                    @enderror
                    <select>
                        @foreach($listevenement as $evenement)
                            <option value="{{$evenement -> id}}">{{$evenement -> id}} {{$evenement -> nomEvenement}}</option>
                        @endforeach
                    </select></td>

                </td>
            </tr>
            <tr>
                <td><label>Description:</label></td>
                <td><input type="text" name="description" id="description"   class="form-control @error('description') is-invalid @enderror"  >
                    @error('description')
                    <div class="invalid-feedback">{{ $errors ->first('description')}}</div>
                    @enderror</td>
            </tr>


            <tr>
                <td clospan="2"><button type="submit" class="btn btn-secondary">Save</button></td>
                <td clospan="2"><button type="reset" class="btn btn-secondary">Reset</button></td>
            </tr>

        </table>
    </div>
</form>
</div>

@endsection
