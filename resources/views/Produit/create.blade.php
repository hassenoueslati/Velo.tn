<form action="{{route('saveProduit')}}" method="GET">
<div class="form-group">
<table>
<tr>
<td><label>Nom du module:</label></td>
<td><input type="text" name="nomProduit" id="nomProduit"></td>

</tr>
    <tr>
<td><label>Nom du module:</label></td>
<td><input type="number" name="quantity" id="quantity"></td>

</tr>
    <tr>
        <td><label>Category:</label></td>
        <td> <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option  value="{{$category->id}}">{{$category->nomCategory}}</option>
                @endforeach
            </select></td>
    </tr>
    <tr>
<td><label>prixProduit:</label></td>
<td><input type="number" name="prixProduit" id="prixProduit"  ></td>
</tr>

    <tr>

</tr>

<td><label>Etat Produit:</label></td>
<td><input type="text" name="etatProduit" id="etatProduit"  ></td>
</tr>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
    </div>

    <tr>



<td><label>descriptionProduit :</label></td>
<td> <input type="text" name="descriptionProduit" id="descriptionProduit" cols=23 >

</input></td></tr>

</div>
<tr>
<td clospan="2"><button type="submit" class="btn btn-secondary">Add</button></td></tr>

</table></div></form>
