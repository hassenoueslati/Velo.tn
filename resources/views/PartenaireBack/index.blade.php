@extends("baseBackOffice")
@section('Partenaire')
    active
@endsection

@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <a href="{{ route('createPartenaire') }}" type="button" class="btn btn-primary">Ajouter Partenaire</a>
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Partenaire</span></h4>




        <!-- Borderless Table -->
        <div class="card">
            <h5 class="card-header">Liste Partenaires</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th>Specialite Partenaire</th>
                        <th>Nom Partenaire</th>

                        <th>Etat</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listPartenaire as $partenaire )
                    <tr>
                        <td>{{$partenaire -> specialitePartenaire }}</td>
                        <td><p >{{$partenaire -> nomPartenaire}}</p></td>
                        {{-- <td><img src="{{asset('storage/'.$partenaire->logo)}}" alt="" width="100px" height="100px"></td> --}}
                        <td>{{$partenaire -> etat }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" type="button"  href="{{route("showFormPartenaire", $partenaire -> id)}}"><i class="bx bx-edit-alt me-1"></i>Edit </a>
                                    <a class="dropdown-item" type="button"  href="{{route("deletePartenaire", $partenaire -> id)}}"><i class="bx bx-trash me-1"></i>Delete </a>
                                </div>
                            </div>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Borderless Table -->
    </div>

@endsection
