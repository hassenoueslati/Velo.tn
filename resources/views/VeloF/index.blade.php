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
 @section('nav-active-Velo')
     active
 @endsection
 @section('head-content')
     <!-- Page Header Start -->
     <div class="container-fluid page-header mb-5 p-0" style="background-image: url(https://images.unsplash.com/photo-1533561052604-c3beb6d55b8d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1331&q=80);">
         <div class="container-fluid page-header-inner py-5">
             <div class="container text-center">
                 <h1 class="display-3 text-white mb-3 animated slideInDown">Velo</h1>

             </div>
         </div>
     </div>
     <!-- Page Header End -->
 @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">velos</div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th>Type</th>
                                        <th>Nombres</th>
                                        <th>Couleurs</th>
                                        <th>Prix</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($velos as $item)


                                <tr>

                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->nombres }}</td>
                                        <td>{{ $item->couleurs }}</td>
                                        <td>{{ $item->prix }}</td>
                                        <td>

                                            <form method="POST" action="{{ url('/veloFF' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
