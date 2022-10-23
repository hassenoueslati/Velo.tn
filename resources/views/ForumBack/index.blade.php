@extends("baseBackOffice")
@section('Forum')
    active
@endsection

@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forum</span></h4>
        <!-- Borderless Table -->
        <div class="card">
            <h5 class="card-header">Borderless Table</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Tags</th>
                        <th>created_at</th>
                        <th>User</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listPost as $post )
                    <tr>
                        <td>{{$post -> titrePost }}</td>
                        <td><p >{{$post -> contenuPost}}</p></td>
                        <td>{{$post -> Tags }}</td>
                        <td>{{$post -> created_at }}</td>
                        <td>{{$post -> user -> name }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
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
        <!--/ Borderless Table -->
    </div>

@endsection
