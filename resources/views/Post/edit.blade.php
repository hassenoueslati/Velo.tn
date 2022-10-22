<form action="{{route("updatePost", $post -> id)}}" method="GET">
    <div class="form-group">
        <table>
            <tr>
                <td><label>titrePost :</label></td>
                <td><input type="text" name="titrePost" id="titrePost" value="{{ $post->titrePost }}" ></td>

            </tr>
            <tr>
                <td><label>contenuPost:</label></td>
                <td> <textarea name="contenuPost" id="contenuPost" cols=23>
                        {{ $post->contenuPost }}</textarea></td></tr>
            </tr>
            <tr>
                <td><label>Tags:</label></td>
                <td><input type="text" name="Tags" id="Tags" value="{{ $post->Tags }}" ></td>
            </tr>
            <tr>
                <td clospan="2"><button type="submit" class="btn btn-secondary">Modifier</button></td>
                <td clospan="2"><button type="reset" class="btn btn-secondary">Annuler</button></td>
            </tr>

    </table>
    </div>
</form>
