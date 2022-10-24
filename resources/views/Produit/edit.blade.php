<form action="{{route('updateProduit',$Produit->id)}}" method="GET">
<div class="form-group">
<table>
<tr>
<td><label>Nom du module:</label></td>
<td><input type="text" name="nomProduit" id="nomProduit" value="{{ $Produit->nomProduit }}" ></td>

</tr><tr>
<td><label>prixProduit:</label></td>
<td><input type="number" name="prixProduit" id="prixProduit" value="{{ $Produit->prixProduit }}" ></td>
</tr><tr>

</tr><tr>
<td><label>Etat Produit:</label></td>
<td><input type="text" name="etatProduit" id="etatProduit" value="{{ $Produit->etatProduit }}" ></td>
</tr><tr>



<td><label>descriptionProduit :</label></td>
<td> <input type="text" name="descriptionProduit" id="descriptionProduit" cols=23 value="{{ $Produit->descriptionProduit}}">

{{ $Produit->descriptionProduit}}</input></td></tr>

</div>
<tr>
<td clospan="2"><button type="submit" class="btn btn-secondary">Modifier</button></td></tr>

</table></div></form>