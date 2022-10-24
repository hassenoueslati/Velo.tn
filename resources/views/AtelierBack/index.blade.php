@extends("baseBackOffice")
@section('Atelier')
    active
@endsection

@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <a href="{{ route('createAtelier') }}" type="button" class="btn btn-primary">Ajouter Atelier</a>
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Atelier</span></h4>
        <!-- Borderless Table -->
        <div class="card">
            <h5 class="card-header">Liste Ateliers</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th>Specialite</th>
                        <th>Capacite</th>
                        <th>Addresse</th>
                        <th>created_at</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listAtelier as $atelier )
                    <tr>
                        <td>{{$atelier -> specialite }}</td>
                        <td><p >{{$atelier -> capacite}}</p></td>
                        <td>{{$atelier -> addresseAtelier }}</td>
                        <td>{{$atelier -> created_at }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" type="button"  href="{{route("showFormAtelier", $atelier -> id)}}"><i class="bx bx-edit-alt me-1"></i>Edit </a>
                                    <a class="dropdown-item" type="button"  href="{{route("deleteAtelier", $atelier -> id)}}"><i class="bx bx-trash me-1"></i>Delete </a>
                                </div>
                            </div>

<!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">New Post</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form  action="{{route("updateAtelier", $atelier -> id)}}" method="GET">
                                                    @csrf
                                                  <div class="mb-3">
                                                    <label class="form-label" for="specialite">Specialite</label>
                                                    <input type="text" name="specialite" id="specialite" class="form-control @error('specialite') is-invalid @enderror" {{ $atelier->specialite}}>
                                                    @error('specialite')
                                                    <div class="invalid-feedback">{{ $errors -> first('specialite')}}</div>
                                                    @enderror
                                                  </div>
                                                  <div class="mb-3">
                                                    <label class="form-label" for="capacite">Capacite</label>
                                                    <input type="text" name="capacite" id="capacite" class="form-control @error('capacite') is-invalid @enderror" {{ $atelier->capacite}}>
                                                    @error('capacite')
                                                    <div class="invalid-feedback">{{ $errors ->first('capacite')}}</div>
                                                    @enderror
                                                  </div>
                                                  <div class="mb-3">
                                                    <label class="form-label" for="addresseAtelier">AddresseAtelier</label>
                                                    <input type="text" name="addresseAtelier" id="addresseAtelier" class="form-control @error('addresseAtelier') is-invalid @enderror" {{ $atelier->addresseAtelier}} >
                                                    @error('addresseAtelier')
                                                    <div class="invalid-feedback">{{ $errors ->first('addresseAtelier')}}</div>
                                                    @enderror
                                                  </div>
                                                  <div class="mb-3">
                                                    <label class="form-label" for="partenaires_id">partenaires_id</label>
                                                    <input type="text" name="partenaires_id" id="partenaires_id" class="form-control @error('partenaires_id') is-invalid @enderror" {{ $atelier->partenaires_id}}/>
                                                    @error('partenaires_id')
                                                    <div class="invalid-feedback">{{ $errors ->first('partenaires_id')}}</div>
                                                    @enderror

                                                  </div>
                                                  <button type="submit" class="btn btn-primary">Update</button>
                                                </form>
                                            </div>
                                        </div>
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
