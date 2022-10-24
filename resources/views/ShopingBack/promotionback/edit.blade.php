@extends("baseBackOffice")
@section('Edit')
    active
@endsection

@section('content')

    <div class="card-body">
    <form action="{{route('updatePromotion',$Promotion->id)}}" method="GET">
        <div class="mb-3">
            <label class="form-label"  for="basic-default-fullname">Libelle</label>
            <input type="text" name="nomPromotion" id="nomPromotion" class="form-control" id="basic-default-fullname" placeholder="libelle" />
        </div>

        <div class="mb-3">
            <label class="form-label" for="basic-default-company">Starting day</label>
            <input type="date" name="dateDebutPromo" class="form-control" id="dateDebutPromo" placeholder="dateDebutPromo" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="basic-default-company">End Day</label>
            <input type="date" name="dateFinPromo" class="form-control" id="dateFinPromo" placeholder="dateFinPromo" />
        </div>

        <div class="mb-3">
            <label class="form-label" for="basic-default-email">Category</label>
            <div class="mb-3">
                <label class="form-label"  for="basic-default-fullname">Category</label>
                <input type="text" name="categoriePromotion" id="categoriePromotion" class="form-control" id="basic-default-fullname" placeholder="Cateory " />
            </div>
            <div class="form-text">You can use letters, numbers & periods</div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="basic-default-message">Description</label>
            <textarea
                id="descriptionPromotion"
                name="descriptionPromotion"
                class="form-control"
                placeholder="Description "
            ></textarea>
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
