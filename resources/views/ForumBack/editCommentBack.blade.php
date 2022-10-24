@extends("baseBackOffice")
@section('Forum')
    active
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Collapse -->
        <h3>Post detail</h3>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4>Post</h4>
                        <div class="container mt-2">
                            <div class="card">
                                <div class="card-body col-lg-12 d-flex justify-content-between">
                                    <div>
                                        <h5 class="card-title"><strong>Title : </strong>{{$post -> titrePost}}</h5>
                                        <p><strong>Content : </strong>{{$post -> contenuPost}}</p>
                                        <h6><strong>Tags : </strong>{{$post -> Tags}}</h6>
                                        <h6> <strong>Posted on</strong> {{$post -> created_at -> format('d/m/Y ')}}</h6>
                                        <h6> <strong>Posted by</strong><span class="badge badge-primary" style=" background-color: blue">{{$post -> user -> name}}</span></h6>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-5">

                                        <a href="{{route('deletePostBack',$post->id)}}" class="btn btn-danger"><img src="https://img.icons8.com/ios-glyphs/30/000000/filled-trash.png" ></a>

                                        @can('update',$post)
                                            <a  class="btn btn-warning" href="{{route('showFormPostBack',$post->id)}}"><img src="https://img.icons8.com/material-sharp/24/000000/edit--v1.png"/></a>
                                        @endcan
                                    </div>

                                </div>

                            </div>
                        </div>
                        <hr>
                        <h4>Comments</h4>
                        <form action="{{route("updateCommentaireBack", $commentaire -> id)}}" method="GET" class="mt-3">
                            @csrf
                            <div class="form-group" style="margin-left: 10px ; margin-right: 50px; margin-bottom: 10px ; ">
                                <label for="contenuCommentaire">Your comment</label>
                                <textarea class="form-control @error('contenuCommentaire') is-invalid @enderror"
                                          name="contenuCommentaire" id="contenuCommentaire" rows="5">{{$commentaire -> contenuCommentaire }}</textarea>
                                @error('contenuCommentaire')
                                <div class="invalid-feedback">{{$errors-> first('contenuCommentaire')}}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-left: 10px">Submit a comment</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
