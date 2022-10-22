<form  method="GET" action="{{route("saveEvenement")}}">
    <div class="form-group">
        <table>
            <tr>
                <td><label for="nomEvenement">Nom:</label></td>
                <td><input type="text" name="nomEvenement" id="nomEvenement" class="form-control @error('nomEvenement')is-invalid @enderror" ></td>
                @error('nomEvenement')
                <div class="invalid-feedback" >{{$message}}</div>
                @enderror

            </tr>
            <tr>
                <td><label>Date:</label></td>
                <td><input type="date" name="dateEvenement" id="dateEvenement"  ></td>
            </tr>
            <tr>
                <td><label>Nombre de palce:</label></td>
                <td> <input  type="number" name="nbPlaces" id="nbPlaces" ></td>
            </tr>
            <tr>
                <td><label>Categorie:</label></td>
                <td><input type="text" name="categorieEvenement" id="categorieEvenement"  ></td>
            </tr>


            <tr>
                <td clospan="2"><button type="submit" class="btn btn-secondary">Ajouter</button></td>
                <td clospan="2"><button type="reset" class="btn btn-secondary">Annuler</button></td>
            </tr>

        </table>
    </div>
</form>
