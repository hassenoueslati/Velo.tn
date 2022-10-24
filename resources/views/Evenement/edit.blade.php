@extends("baseBackOffice")
@section('Evenement')
    active
@endsection


@section('content')



    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Forum</h5>
                        <small class="text-muted float-end">Update Events </small>
                    </div>
                    <div class="card-body">
                        <form action="{{route("updateEvenementBack", $evenement -> id)}}" method="GET">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Name</label>
                                <input  class="form-control" type="text" name="nomEvenement" id="nomEvenement" value="{{ $evenement->nomEvenement }}" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Date</label>
                                <input  class="form-control" type="date" name="dateEvenement" id="dateEvenement" value="{{ $evenement->dateEvenement }}" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Place Number</label>
                                <input class="form-control" type="number" name="nbPlaces" id="nbPlaces" value="{{$evenement->nbPlaces }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Category</label>
                                <input class="form-control" type="text" name="categorieEvenement" id="categorieEvenement" value="{{ $evenement->categorieEvenement }}" >
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
