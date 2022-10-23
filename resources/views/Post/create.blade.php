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

@section('content')
<div class="container mt-3">
    <h1 style="color: #2eadb7">New Post</h1>
    <hr>
    <form  action="{{route("savePost")}}" method="GET">
        @csrf

        <div class="form-group col-lg-6 mt-3">
            <label for="titrePost">Title</label>
            <input type="text" name="titrePost" id="titrePost" class="form-control @error('titrePost') is-invalid @enderror"  >
            @error('titrePost')
            <div class="invalid-feedback">{{ $errors ->first('titrePost')}}</div>
            @enderror
        </div>
        <div class="form-group col-lg-6 mt-3">
            <label for="contenuPost">Content</label>
            <textarea name="contenuPost" id="contenuPost" cols=23 class="form-control @error('contenuPost') is-invalid @enderror"></textarea>
            @error('contenuPost')
            <div class="invalid-feedback">{{ $errors ->first('contenuPost')}}</div>
            @enderror
        </div>
        <div class="form-group col-lg-6 mt-3">
            <label for="Tags">Tags</label>
            <input type="text" name="Tags" id="Tags" class="form-control @error('Tags') is-invalid @enderror" >
            @error('Tags')
            <div class="invalid-feedback">{{ $errors ->first('Tags')}}</div>
            @enderror
        </div>
        <div class="mt-3 col-lg-2 d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-primary ">Reset</button>
        </div>

    </form>
</div>
@endsection
