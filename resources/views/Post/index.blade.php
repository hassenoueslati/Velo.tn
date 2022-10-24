@extends("baseFrontOffice")
@section('head')
    <meta charset="utf-8">
    <title>Vélo.tn </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(https://images.unsplash.com/photo-1533561052604-c3beb6d55b8d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1331&q=80);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Forum</h1>

            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <a type="submit" class="btn btn-primary mt-3 mb-3" href="{{route('createPost')}}">Nouveau Post</a>
                <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/searchPost')}}">
                    <div class="d-flex">
                        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search For Post" aria-label="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </div>
                </form>
        </div>
        <div class="list-group">
            @foreach($listPost as $post )
                <div class="list-group-item" data-wow-delay="0.3s">
                    <h4><a href="{{route('showPost',$post->id)}}">{{$post -> titrePost }}</a></h4>
                    <p>{{$post -> contenuPost}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small>Posté le {{$post -> created_at -> format('d/m/Y à H:m')}}</small>
                        <span class="badge badge-primary" style=" background-color: blue">{{$post -> user -> name}}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
