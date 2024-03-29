@extends("baseBackOffice")
@section('Partenaire')
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
                        <h5 class="mb-0">Ajouter un partenaire</h5>
                        <small class="text-muted float-end">AeroVelo</small>
                      </div>
                      <div class="card-body">
                        <form  action="{{route("savePartenaire")}}" method="GET">
                            @csrf
                          <div class="mb-3">
                            <label class="form-label" for="specialitePartenaire">Specialite Partenaire</label>
                            <input type="text" name="specialitePartenaire" id="specialitePartenaire" class="form-control @error('specialitePartenaire') is-invalid @enderror" />
                            @error('specialitePartenaire')
                            <div class="invalid-feedback">{{ $errors ->first('specialitePartenaire')}}</div>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="nomPartenaire">Nom Partenaire</label>
                            <input type="text" name="nomPartenaire" id="nomPartenaire" class="form-control @error('nomPartenaire') is-invalid @enderror" />
                            @error('nomPartenaire')
                            <div class="invalid-feedback">{{ $errors ->first('nomPartenaire')}}</div>
                            @enderror
                          </div>
                          <div class="custom-file">
                            <label class="custom-file-label" for="logo">Choose file</label>
                            <input type="file" name="logo" class="custom-file-input" id="logo">

                        </div>
                          <div class="mb-3">
                            <label class="form-label" for="etat">Etat</label>
                            <input type="text" name="etat" id="etat" class="form-control @error('etat') is-invalid @enderror" />
                            @error('etat')
                            <div class="invalid-feedback">{{ $errors ->first('etat')}}</div>
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
