@extends("baseBackOffice")
@section('Partenaire')
    active
@endsection

@section('content')
    <!-- Page Partenaire2 start -->
    <div style="margin-left: 10px ;">
        <div class="container mt-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$partenaire -> specialitePartenaitre}}</h5>
                    <p>{{$partenaire -> nomPartenaire}}</p>
                    <h6 style="color: #0dcaf0">{{$partenaire -> etat}}</h6>

                    <div class="d-flex justify-content-between align-items-center mt-5">
                        @can('update',$partenaire)
                        <a href="{{route('showFormPartenaire',$partenaire->id)}}" class="btn btn-warning"><img src="https://img.icons8.com/material-sharp/24/000000/edit--v1.png"/> Update</a>
                        @endcan
                        @can('delete',$partenaire)
                        <a href="{{route('deletePartenaire',$partenaire->id)}}" class="btn btn-danger"><img src="https://img.icons8.com/ios-glyphs/30/000000/filled-trash.png" > Delete</a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>


@endsection
