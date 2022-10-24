@extends("baseBackOffice")
@section('Atelier')
    active
@endsection

@section('content')

    <!-- Content -->



            <div class="container-xxl flex-grow-1 container-p-y">
                <!-- Basic Layout -->
                <div class="row">
                  <div class="col-xl">
                    <div class="card mb-4">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Ajouter un atelier</h5>
                        <small class="text-muted float-end">AeroVelo</small>
                      </div>
                      <div class="card-body">
                        <form  action="{{route("saveAtelier")}}" method="GET">
                            @csrf
                          <div class="mb-3">
                            <label class="form-label" for="specialite">Specialite</label>
                            <input type="text" name="specialite" id="specialite" class="form-control @error('specialite') is-invalid @enderror" />
                            @error('specialite')
                            <div class="invalid-feedback">{{ $errors ->first('specialite')}}</div>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="capacite">Capacite</label>
                            <input type="number" name="capacite" id="capacite" class="form-control @error('capacite') is-invalid @enderror" />
                            @error('capacite')
                            <div class="invalid-feedback">{{ $errors ->first('capacite')}}</div>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="addresseAtelier">AddresseAtelier</label>
                            <input type="text" name="addresseAtelier" id="addresseAtelier" class="form-control @error('addresseAtelier') is-invalid @enderror" />
                            @error('addresseAtelier')
                            <div class="invalid-feedback">{{ $errors ->first('addresseAtelier')}}</div>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="partenaires_id">partenaires_id</label>
                            <input type="text" name="partenaires_id" id="partenaires_id" class="form-control @error('partenaires_id') is-invalid @enderror" />
                            @error('partenaires_id')
                            <div class="invalid-feedback">{{ $errors ->first('partenaires_id')}}</div>
                            @enderror

                          </div>
                          <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

              </div>



@endsection
