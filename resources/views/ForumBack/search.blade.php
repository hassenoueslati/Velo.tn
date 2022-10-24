@extends("baseBackOffice")
@section('Forum')
    active
@endsection

@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forum</span></h4>
        <!-- Striped Rows -->
        <div class="card">
            <div class="d-flex justify-content-between">
                <h5 class="card-header">Post List</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    New Post
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">New Post</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route("savePostBack")}}" method="GET">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Title</label>
                                    <input type="text" name="titrePost" id="titrePost" class="form-control @error('titrePost') is-invalid @enderror" placeholder="Title" />
                                    @error('titrePost')
                                    <div class="invalid-feedback">{{ $errors ->first('titrePost')}}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-message">Content</label>
                                    <textarea
                                        name="contenuPost" id="contenuPost"
                                        class="form-control @error('contenuPost') is-invalid @enderror"
                                        placeholder="Content"
                                    ></textarea>
                                    @error('contenuPost')
                                    <div class="invalid-feedback">{{ $errors ->first('contenuPost')}}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Tags</label>
                                    <input type="text" name="Tags" id="Tags" class="form-control @error('Tags') is-invalid @enderror" placeholder="#tags" />
                                    @error('Tags')
                                    <div class="invalid-feedback">{{ $errors ->first('Tags')}}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Tags</th>
                        <th>created_at</th>
                        <th>User</th>
                        <th>Number of Comments</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($listPost as $post )
                        <tr>
                            <td>{{$post -> titrePost }}</td>
                            <td>{{$post -> Tags }}</td>
                            <td>{{$post -> created_at -> format('d/m/Y') }}</td>
                            <td>{{$post -> user -> name }}</td>
                            <td>{{$post -> commentaire->count()}}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('showPostBack',$post->id)}}"
                                        ><i class="bx bx-edit-alt me-1"></i> Show</a
                                        >
                                        <a class="dropdown-item" href="{{route('deletePostBack',$post->id)}}"
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
        <!--/ Striped Rows -->
    </div>


@endsection
