@extends("baseBackOffice")
@section('Reservation')
    active
@endsection

@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h2 class="card-header">Reservations List</h2>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th> Place Number</th>
                        <th>Category</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($listreservation as $reservation )

                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$reservation-> evenement -> nomEvenement }}</strong></td>

                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$reservation-> user -> email }}</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$reservation->dateDebut }}</strong></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$reservation->dateFin}}</strong></td>
                            <td><span class="fab fa-angular fa-lg text-danger me-3">{{$reservation->description }}</span></td>

                            <td>
                                <div style="width: 30px ; height: 30px">
                                    <img style="height: 100% ; width: 100%" src="data:image/png;base64,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"></img>
                                </div>
                                    <a   href="{{route('deleteReservationBack',$reservation->id)}}">
                                        Delete
                                    </a>


                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->



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














