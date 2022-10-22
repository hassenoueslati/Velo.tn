<form  method="GET" action="{{route("updateReservation", $reservation -> id)}}">
    <div class="form-group">
        <table>
            <tr>
                <td><label>Date Debut:</label></td>
                <td><input type="date" name="dateDebut" id="dateDebut" value="{{ $reservation->dateDebut }}" ></td>

            </tr>
            <tr>
                <td><label>Date Fin:</label></td>
                <td><input type="date" name="dateFin" id="dateFin" value="{{ $reservation->dateFin }}"  ></td>
            </tr>
            <tr>
                <td><label>User:</label></td>
                <td> <input  type="number" name="user_id" id="user_id" value="{{ $reservation->user_id }}"></td>
            </tr>
            <tr>
                <td><label>Evenement:</label></td>
                <td><input type="number" name="evenement_id" id="evenement_id" value="{{ $reservation->evenement_id }}" ></td>

            </tr>


            <tr>
                <td><label>Description:</label></td>

                <td><input type="text" name="description" id="description" value="{{ $reservation->description }}" ></td>
            </tr>


            <tr>
                <td clospan="2"><button type="submit" class="btn btn-secondary">Ajouter</button></td>
                <td clospan="2"><button type="reset" class="btn btn-secondary">Annuler</button></td>
            </tr>

        </table>
    </div>
</form>
