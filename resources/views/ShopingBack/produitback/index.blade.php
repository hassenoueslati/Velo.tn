@extends("baseBackOffice")
@section('Product')
    active
@endsection

@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex justify-content-between">
                <h5 class="card-header">Products</h5>
            </div>
            <div class="table-responsive text-nowrap">
                <button type="button" class="btn btn-primary " style="margin-bottom: 10px ; margin-left: 10px" data-toggle="modal" data-target="#exampleModal">
                    Add Product
                </button>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>nomProduit</th>
                        <th>categorieProduit</th>
                        <th>image</th>
                        <th>created at</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($listProduit as $produit )

                        <tr><td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$produit -> nomProduit }}</strong></td>


                            <td>{{$produit -> Category->nomCategory }}</td>
                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">

                                    <li
                                        data-popup="tooltip-custom"
                                        data-bs-placement="top"
                                        class="pull-up"
                                        title="Christina Parker"

                                    >
                                        <img   width="90"
                                               height="90" src="{{ asset('uploads/'. $produit->image) }} "   alt="Avatar" class="rounded-circle" />
                                    </li>
                                </ul>
                            </td>

                            <td><span class="fab fa-angular fa-lg text-danger me-3">{{$produit -> created_at->format('Y-m-d');}}</span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a action="" href="{{route('editProduitBack',$produit->id)}}" class="dropdown-item" href="javascript:void(0);">
                                            <i class="bx bx-edit-alt me-1" data-toggle="modal" data-target="#edit"></i> Edit</a>
                                        <a href="{{route('deleteProduit',$produit->id)}}" class="dropdown-item"  href="javascript:void(0);">
                                            <i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- END Content -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Add Product</h5>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('saveProduit')}}" method="GET">
                                        <div class="mb-3">
                                            <label class="form-label "  for="basic-default-fullname">Libelle</label>
                                            <input type="text" name="nomProduit" id="nomProduit" class="form-control @error('nomProduit') is-invalid @enderror" id="basic-default-fullname" placeholder="Product libelle" />
                                            @error('nomProduit')
                                            <div class="invalid-feedback">{{ $errors ->first('nomProduit')}}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-company">Status</label>
                                            <input type="text" name="etatProduit" class="form-control" id="etatProduit" placeholder="etatProduit" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-company">Price</label>
                                            <input type="number" name="prixProduit" class="form-control" id="prixProduit" placeholder="Price" />
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
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-company">Quantity</label>
                                            <input type="number" name="quantity" class="form-control" id="quantity" placeholder="quantity" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Description</label>
                                            <textarea
                                                id="descriptionProduit"
                                                name="descriptionProduit"
                                                class="form-control"
                                                placeholder="Product status "
                                            ></textarea>
                                        </div>
                                        <div class="card">
                                            <h5 class="card-header">File input</h5>
                                            <div class="card-body">
                                                <div class="mb-2">
                                                    <label for="formFile" class="form-label">Add Image</label>
                                                    <input class="form-control"  name="image"  type="file" id="formFile" />
                                                </div>

                                            </div>
                                        </div>


                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>                                    </form>
                                </div>
                            </div>
                        </div>

                </div>
                </div>

            </div>
        </div>
    </div>
    <div>

    </div>
    <!-- Modal Edit -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection
