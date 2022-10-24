@extends("baseBackOffice")
@section('Evenement')
    active
@endsection

@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h2 class="card-header">Events List</h2>
            <div class="table-responsive text-nowrap">
                <button type="button" style="margin-bottom: 10px ; margin-left: 10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add New Event
                </button>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th> Place Number</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($listevenement as $evenement )

                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$evenement->nomEvenement }}</strong></td>

                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$evenement->dateEvenement }}</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$evenement->nbPlaces }}</strong></td>

                            <td><span class="fab fa-angular fa-lg text-danger me-3">{{$evenement->categorieEvenement }}</span></td>
                            <td style="display: flex ;justify-content: space-around">
                                <div style="width: 30px ; height: 30px ;  display: flex">
                                    <img style="height: 100% ; width: 100% ;display:block" src="data:image/png;base64,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"></img>
                                </div>
                                <a style="display:block" href="{{route('deleteEvenement',$evenement->id)}}">Delete</a>

                                <div style="width: 30px ; height: 30px ; display: flex">
                                    <img style="height: 100% ; width: 100% ;display:block" src="data:image/png;base64,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">
                                </div>
                                <a style="display:block" href="{{route('editEvenement',$evenement->id)}}">Update</a>

                            </td>

                        </tr>
                    @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-xl">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Add Event</h5>
                                    <small class="text-muted float-end"></small>
                                </div>
                                <div class="container mt-3">
                                    <form  method="GET" action="{{route("saveEvenement")}}">
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <td><label for="nomEvenement">Name:</label></td>
                                                    <td><input type="text" name="nomEvenement" id="nomEvenement" class="form-control @error('nomEvenement')is-invalid @enderror" >
                                                        @error('nomEvenement')
                                                        <div class="invalid-feedback" >{{ $errors ->first('nomEvenement')}}</div>
                                                        @enderror</td>


                                                </tr>
                                                <tr>
                                                    <td><label>Date:</label></td>
                                                    <td><input type="date" name="dateEvenement" id="dateEvenement" class="form-control @error('dateEvenement') is-invalid @enderror"  >
                                                        @error('dateEvenement')
                                                        <div class="invalid-feedback">{{ $errors ->first('dateEvenement')}}</div>
                                                        @enderror</td>
                                                </tr>
                                                <tr>
                                                    <td><label> Place Number:</label></td>
                                                    <td> <input  type="number" name="nbPlaces" id="nbPlaces" class="form-control @error('nbPlaces') is-invalid @enderror"  >
                                                        @error('nbPlaces')
                                                        <div class="invalid-feedback">{{ $errors ->first('nbPlaces')}}</div>
                                                        @enderror</td>
                                                </tr>
                                                <tr>
                                                    <td><label>Categorie:</label></td>
                                                    <td><input type="text" name="categorieEvenement" id="categorieEvenement"  class="form-control @error('categorieEvenement') is-invalid @enderror"  >
                                                        @error('categorieEvenement')
                                                        <div class="invalid-feedback">{{ $errors ->first('categorieEvenement')}}</div>
                                                        @enderror</td>
                                                </tr>


                                                <tr>
                                                    <td clospan="2"><button type="submit" class="btn btn-secondary">Ajouter</button></td>
                                                    <td clospan="2"><button type="reset" class="btn btn-secondary">Annuler</button></td>
                                                </tr>

                                            </table>
                                        </div>
                                    </form>
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














