@extends("baseBackOffice")
@section('Edit')
    active
@endsection

@section('content')

    <div class="card-body">
        <form action="{{route('updatePromotion',$Promotion->id)}}" method="GET">
            <div class="mb-3">
                <label class="form-label"  for="basic-default-fullname">Libelle</label>
                <input type="text" name="nomPromotion" id="nomPromotion" class="form-control @error('nomPromotion') is-invalid @enderror" id="basic-default-fullname" placeholder="libelle" />
                @error('nomPromotion')
                <div class="invalid-feedback">{{ $errors -> first('nomPromotion')}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="basic-default-company">Starting day</label>
                <input type="date" name="dateDebutPromo" class="form-control @error('dateDebutPromo') is-invalid @enderror" id="dateDebutPromo" placeholder="dateDebutPromo" />
                @error('dateDebutPromo')
                <div class="invalid-feedback">{{ $errors -> first('dateDebutPromo')}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="basic-default-company">End Day</label>
                <input type="date" name="dateFinPromo" class="form-control @error('dateFinPromo') is-invalid @enderror" id="dateFinPromo" placeholder="dateFinPromo" />
                @error('dateFinPromo')
                <div class="invalid-feedback">{{ $errors -> first('dateFinPromo')}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="basic-default-email">Category</label>
                <div class="mb-3">
                    <label class="form-label"  for="basic-default-fullname">Category</label>
                    <input type="text" name="categoriePromotion" id="categoriePromotion" class="form-control @error('categoriePromotion') is-invalid @enderror" id="basic-default-fullname" placeholder="Cateory " />
                    @error('categoriePromotion')
                    <div class="invalid-feedback">{{ $errors -> first('categoriePromotion')}}</div>
                    @enderror
                </div>
                <div class="form-text">You can use letters, numbers & periods</div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="basic-default-message">Description</label>
                <textarea
                    id="descriptionPromotion"
                    name="descriptionPromotion"
                    class="form-control @error('descriptionPromotion') is-invalid @enderror"
                    placeholder="Description "
                ></textarea>
                @error('descriptionPromotion')
                <div class="invalid-feedback">{{ $errors -> first('descriptionPromotion')}}</div>
                @enderror
            </div>
            <div class="card">
                <h5 class="card-header">File input</h5>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control"  name="image"  type="file" id="formFile" />
                    </div>

                </div>
            </div>


            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>                                    </form>
    </div>

@endsection
