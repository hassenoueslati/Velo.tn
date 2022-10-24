<form action="{{route('savePromotion')}}" method="GET">
    <div class="form-group">
        <table>

            <tr>
                <td><label>nom Promotion:</label></td>
                <td><input type="text" name="nomPromotion" id="nomPromotion"  ></td>
            </tr>
            <tr>
                <td><label>description Promotion:</label></td>
                <td><input type="text" name="descriptionPromotion" id="descriptionPromotion"  ></td>
            </tr>
            <tr>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </tr>
            <tr>

            </tr><tr>
                <td><label>categorie Promotion:</label></td>
                <td><input type="text" name="categoriePromotion" id="categoriePromotion"  ></td>
            </tr>
            <tr>

                <td><label>date DebutPromo :</label></td>
                <td> <input type="date" name="dateDebutPromo" id="dateDebutPromo" cols=23 >

                    </input></td>

            </tr>
            <tr>

                <td><label>dateFinPromo :</label></td>
                <td> <input type="date" name="dateFinPromo" id="dateFinPromo" cols=23 >

                    </input></td>

            </tr>

    </div>
    <tr>
        <td clospan="2"><button type="submit" class="btn btn-secondary">Add</button></td></tr>

    </table></div></form>
@endsection
