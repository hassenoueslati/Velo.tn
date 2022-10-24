@extends("baseBackOffice")
@section('Editcat')
    active
@endsection

@section('content')
    <!-- Modal -->

    <div class="card-body">
        <form action="{{route('updateCategory',$Category->id)}}" method="GET">
            <div class="mb-3">
                <label class="form-label"  for="basic-default-fullname">Libelle</label>
                <input type="text" name="nomCategory" id="nomCategory" value="{{ $Category->nomCategory }}" class="form-control" id="basic-default-fullname" placeholder="Product libelle" />
            </div>







            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>                                    </form>
    </div>
@endsection
