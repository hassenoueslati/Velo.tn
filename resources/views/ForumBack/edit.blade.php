@extends("baseBackOffice")
@section('Forum')
    active
@endsection


@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Forum</h5>
                    <small class="text-muted float-end">Update Post</small>
                </div>
                <div class="card-body">
                    <form action="{{route("updatePostBack", $post -> id)}}" method="GET">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Title</label>
                            <input type="text" name="titrePost" id="titrePost" class="form-control @error('titrePost') is-invalid @enderror"
                                   placeholder="Title" value="{{ $post->titrePost }}" />
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
                            >{{ $post->contenuPost }}</textarea>
                            @error('contenuPost')
                            <div class="invalid-feedback">{{ $errors ->first('contenuPost')}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Tags</label>
                            <input type="text" name="Tags" id="Tags" class="form-control @error('Tags') is-invalid @enderror"
                                   placeholder="#tags" value="{{ $post->Tags }}" />
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
    </div>
@endsection
