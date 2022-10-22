<form  method="GET" action="{{route("updateEvenement", $evenement -> id)}}">
    <div class="form-group">
        <table>
            <tr>
                <td><label>Nom:</label></td>
                <td><input type="text" name="nomEvenement" id="nomEvenement" value="{{ $evenement->nomEvenement }}" ></td>

            </tr>
            <tr>
                <td><label>Date:</label></td>
                <td><input type="date" name="dateEvenement" id="dateEvenement" value="{{ $evenement->dateEvenement }}" ></td>
            </tr>
            <tr>
                <td><label>Nombre de palce:</label></td>
                <td> <input  type="number" name="nbPlaces" id="nbPlaces" value="{{$evenement->nbPlaces }}"></td>
            </tr>
            <tr>
                <td><label>Categorie:</label></td>
                <td><input type="text" name="categorieEvenement" id="categorieEvenement" value="{{ $evenement->categorieEvenement }}" ></td>
            </tr>


            <tr>
                <td clospan="2"><button type="submit" class="btn btn-secondary">Modifier</button></td>
                <td clospan="2"><button type="reset" class="btn btn-secondary">Annuler</button></td>
            </tr>

        </table>
    </div>
</form>
