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
@section('content')
    <!-- Page Post2 start -->
    <div style="margin-left: 10px ;">
        <div class="container mt-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$post -> titrePost}}</h5>
                    <p>{{$post -> contenuPost}}</p>
                    <h6 style="color: #0dcaf0">{{$post -> Tags}}</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <small>Posté le {{$post -> created_at -> format('d/m/Y à H:m')}}</small>
                        <span class="badge badge-primary" style=" background-color: blue">{{$post -> user -> name}}</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        @can('update',$post)
                            <a href="{{route('showFormPost',$post->id)}}" class="btn btn-warning"><img src="https://img.icons8.com/material-sharp/24/000000/edit--v1.png"/> Update</a>
                        @endcan
                        @can('delete',$post)
                            <a href="{{route('deletePost',$post->id)}}" class="btn btn-danger"><img src="https://img.icons8.com/ios-glyphs/30/000000/filled-trash.png" > Delete</a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Post2 End -->
        <hr>
        <h4>Commentaire</h4>
        <form action="{{route("updateCommentaire", $commentaire -> id)}}" method="GET" class="mt-3">
            @csrf
            <div class="form-group" style="margin-left: 10px ; margin-right: 50px; margin-bottom: 10px ;">
                <label for="contenuCommentaire">Votre commentaire</label>
                <textarea class="form-control @error('contenuCommentaire') is-invalid @enderror"
                          name="contenuCommentaire" id="contenuCommentaire" rows="5">{{ $commentaire -> contenuCommentaire }}</textarea>
                @error('contenuCommentaire')
                <div class="invalid-feedback">{{$errors-> first('contenuCommentaire')}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left: 10px">Soumettre mon commentaire</button>
        </form>
    </div>

@endsection
