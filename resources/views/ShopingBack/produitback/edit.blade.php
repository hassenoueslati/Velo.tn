@extends("baseBackOffice")
@section('Edit')
    active
@endsection

@section('content')
    <!-- Modal -->

    <div class="card-body">
        <form action="{{route('updateProduit',$Produit->id)}}" method="GET">
            <div class="mb-3">
                <label class="form-label"  for="basic-default-fullname">Libelle</label>
                <input type="text" name="nomProduit" id="nomProduit" value="{{ $Produit->nomProduit }}" class="form-control" id="basic-default-fullname" placeholder="Product libelle" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="basic-default-company">Status</label>
                <input type="text" name="etatProduit"  value="{{ $Produit->etatProduit }}" class="form-control" id="etatProduit" placeholder="etatProduit" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="basic-default-company">Price</label>
                <input type="number" name="prixProduit"  value="{{ $Produit->prixProduit }}" class="form-control" id="etatProduit" placeholder="Price" />
            </div>



            <div class="mb-3">
                <label class="form-label" for="basic-default-message">Description</label>
                <textarea
                    id="descriptionProduit"
                    name="descriptionProduit"
                    class="form-control"
                    placeholder="Product Description "
                    value="{{ $Produit->descriptionProduit }}"
                ></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label" for="basic-default-email">Category</label>
                <div class="input-group input-group-merge">
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option  value="{{$category->id}}">{{$category->nomCategory}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-text">You can use letters, numbers & periods</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="basic-default-company">Quantity</label>
                <input type="number" name="quantity" value="{{ $Produit->quantity }}" class="form-control" id="quantity" placeholder="quantity" />
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
