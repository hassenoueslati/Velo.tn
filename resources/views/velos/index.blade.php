@extends('velos.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">velos</div>
                    <div class="card-body">
                        <a href="{{ url('/velo/create') }}" class="btn btn-success btn-sm" title="Add New Velo">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Type</th>
                                        <th>Nombres</th>
                                        <th>Couleurs</th>
                                        <th>Prix</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($velos as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->nombres }}</td>
                                        <td>{{ $item->couleurs }}</td>
                                        <td>{{ $item->prix }}</td>
                                        <td>
                                            <a href="{{ url('   /velo/' . $item->id) }}" title="View Velo"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/velo/' . $item->id . '/edit') }}" title="Edit Velo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/velo' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Velo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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