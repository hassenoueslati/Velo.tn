<form  method="GET" action="{{route("savePost")}}">
    <div class="form-group">
        <table>
            <tr>
                <td><label>titrePost :</label></td>
                <td><input type="text" name="titrePost" id="titrePost"  ></td>

            </tr>
            <tr>
                <td><label>contenuPost:</label></td>
                <td> <textarea name="contenuPost" id="contenuPost" cols=23>
                        </textarea></td></tr>
            </tr>
            <tr>
                <td><label>Tags:</label></td>
                <td><input type="text" name="Tags" id="Tags" ></td>
            </tr>
            <tr>
                <td><label>User_id :</label></td>
                <td><input type="number" name="user_id" id="user_id" ></td>
            </tr>
            <tr>
                <td clospan="2"><button type="submit" class="btn btn-secondary">Save</button></td>
                <td clospan="2"><button type="reset" class="btn btn-secondary">Annuler</button></td>
            </tr>

        </table>
    </div>
</form>
