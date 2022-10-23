@extends('locations.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Location</div>
                    <div class="card-body">
                        <a href="{{ url('/location/create') }}" class="btn btn-success btn-sm" title="Add New location">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Lieu</th>
                                        <th>cin</th>
                                        <th>dateDebut</th>
                                        <th>dateFin</th>
                                        <th>Type Velo</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($locations as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->lieu }}</td>
                                        <td>{{ $item->cin }}</td>
                                        <td>{{ $item->dateDebut }}</td>
                                        <td>{{ $item->dateFin }}</td>
                                        <td>{{ $item->$locations->$velos->type }}</td>
                                        <td>
                                            <a href="{{ url('/location/' . $item->id) }}" title="View location"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/location/' . $item->id . '/edit') }}" title="Edit location"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/location' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete location" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection