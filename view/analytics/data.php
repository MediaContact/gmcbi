<?php $leftmenu = $menu; 
if(isset($leclient[0]->Libelle_client))
	$infosclient = $leclient[0]->Libelle_client."/".$leclient[0]->Libelle_activite ;
?>

<div class="pt-3">

	<?php echo $this->Session->flash(); ?>

<form method="POST" action="">

<div class="row">
<select  class="form-control col-sm-3" name="datatype" required>

<?php if($_SESSION['userInfodepartementId']=='3'){ ?>
	<option value="">Elément de salaire</option>
	<option value="fin_msa">Evolution de la masse salariale</option>
	<option value="fin_cso">Evolution des charges sociales</option>
	<option value="fin_irts">Evolution IRPP / TS</option>
	<option value="fin_vps">Evolution VPS</option>
	<option value="fin_nap">Evolution Net à payer (NAP)</option>
	<option disabled>Les chiffres</option>
	<option value="fin_ca">Chiffres d'affaires</option>
	<option value="fin_cha">Charges</option>
	<option value="fin_obj">Objectifs</option>

<?php }
if($_SESSION['userInfodepartementId']=='1'){ ?>
	


	<option value="">Reception</option>
	<option value="rec_qos">QOS (Qualité de service)</option>
	<option value="rec_eff">Efficacité</option>
	<option value="rec_fcr">FCR (Taux de Résolution)</option>
	<option value="rec_dma">DMA (Durée Moyenne d'Attente)</option>
	<option disabled>Emission</option>
	<option value="emi_txcon">Taux de concrétisation</option>
	<option value="emi_nbcon">Nombre de contrat transformés en vente</option>
	<option value="emi_txtran">Taux de transformation</option>
	<option value="emi_nbargu">Nombre de contact argumenté de l'heure</option>
	<option disabled>Digital</option>
	<option value="dig_qos">QOS (Qualité de service)</option>
	<option value="dig_delai">Delai de la première réponse</option>
	<option value="dig_fcr">FCR (Taux de Résolution)</option>
	<option disabled>Back Office</option>
	<option value="bac_txcon">Taux de conformité</option>

<?php } ?>

</select>
	<div class="input-group col-sm-2">
    <span class="input-group-addon">Valeur</span>
    <input name="dataValeur" type="text" class="form-control"  placeholder="La valeur" required>
  </div>

  <div class="input-group col-sm-2">
    <span class="input-group-addon">Date</span>
    <input type="text" id="inputPeriodeDebut" class="form-control" name="dataDate" placeholder="la date" required>
  </div>

   <div class="input-group col-sm-3">
    <span class="input-group-addon">Commentaire</span>
    <input type="text" id="inputPeriodeDebut" class="form-control" name="commentaire" placeholder="" >
  </div>

   <div class="col-md-2">
  		<button type="submit" name="action" value="addVal" class="btn btn-primary "><i class="fa fa-plus"></i></button>
  		<button type="submit" name="action" value="editNote" class="btn btn-warning "><i class="fa fa-pencil"></i></button>
    </div>

</div>
</form>
	<div class="row mb-3">
		<div class="col-sm-12">&nbsp;</div>
	</div>
	
	<div class="container mt-3">
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-sm table-striped table-hover">
				  <thead class="thead-dark">
				    <tr>
				      <th >#</th>
				      <th scope="col">First</th>
				      <th scope="col">Last</th>
				      <th scope="col">Handle</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry</td>
				      <td>the Bird</td>
				      <td>@twitter</td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>
	</div>

</div>