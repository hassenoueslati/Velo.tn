@extends("baseBackOffice")
@section('Promotion')
    active
@endsection

@section('content')

    <!-- Striped Rows -->
    <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Promotions</h5>
        <div class="table-responsive text-nowrap">
            <button type="button" class="btn btn-primary" style="margin-bottom: 10px ; margin-left: 10px" data-toggle="modal" data-target="#exampleModal">
                Add Promotion
            </button>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>nomPromotion</th>
                    <th>categoriePromotion</th>
                    <th>image</th>

                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($listPromotion as $promotion )

                    <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$promotion -> nomPromotion }}</strong></td>
                    <td>{{$promotion -> categoriePromotion }}</td>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">

                            <li
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="pull-up"
                                title="Christina Parker"
                            >
                                <img  width="90"
                                      height="90" src="{{ asset('uploads/'. $promotion->image) }} " alt="Avatar" class="rounded-circle" />
                            </li>
                        </ul>
                    </td>


                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('editPromotionBack',$promotion->id)}}" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a class="dropdown-item"  href="{{route('deletePromotion',$promotion->id)}}" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                                >
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
    <!--/ Striped Rows -->



    <!-- Button trigger modal -->

    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                    <div class="row">
                        <div class="col-xl">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Add Offre</h5>
                                    <small class="text-muted float-end">Default label</small>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('savePromotion')}}" method="GET">
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
                                            <div class="mb-3">
                                                <label class="form-label"  for="basic-default-fullname">Category</label>
                                                <input type="text" name="categoriePromotion" id="categoriePromotion" class="form-control" id="basic-default-fullname" placeholder="Cateory " />
                                            </div>
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
