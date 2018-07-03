<?php $leftmenu = $menu; 
if(isset($leclient[0]->Libelle_client))
	$infosclient = $leclient[0]->Libelle_client."/".$leclient[0]->Libelle_activite ;
?>

<div class="pt-3">

	<div class="container mt-3 mb-3">
		<!-- options choix de période -->
		<div class="row mb-3">
			<div class="col-md-6">
				<p class="font-italic font-weight-bold"><?= 'Cette année'; ?> (<?= $date_debut; ?> – <?= $date_fin; ?>)</p>				
			</div>
			<div class="col-md-6 text-right">

				<form action="" method="post">
				  <div class="row">
				    <!-- <div class="col">
				      <input type="text" class="form-control" id="inputPeriodeDebut" placeholder="Du">
				    </div>
				    <div class="col">
				      <input type="text" class="form-control" id="inputPeriodeFin" placeholder="Au">
				    </div>
				    <div class="col-md-1">
				    				  		<button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i></button>
				    </div> -->

				    <div class="col">
				    	<div class="dropdown dropleft">
						  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Période
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="#">Ce mois</a>
						    <a class="dropdown-item" href="#">Ce trimestre</a>
						    <a class="dropdown-item" href="#">Cette année</a>
						  </div>
						</div>
				    </div>
				  </div>

				</form>

			</div>
		</div>

		<div class="row border-top pt-3" style="border-top: 1px solid #ccc;">
			<div class="col-sm-12">
				<div class="row">

					<div class="col-sm-6">
						<?php if (isset($lesclients)): ?>
								
							<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
							  
							  <?php foreach ($lesclients as $key => $client): ?>
							  	
								  <div class="btn-group" role="group">
									<?php if ($client->lesactivites): ?>
									    <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									      <?= $client->Libelle_client; ?>
									    </button>

									    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
								    	<?php foreach ($client->lesactivites as $keys => $activite): ?>
									     	<a class="dropdown-item" href="<?php echo BASE_URL.'/analytics/views/'.$iddepartement.'/'.$type.'/'.$idpays.'/'.$activite->idactivites ?>">
									     		<?php echo $activite->Libelle_activite ?>								     		
									     	</a>
								    	<?php endforeach; ?>
								    	</div>
								    <?php else: ?>
								    	<a href="#" class="btn btn-light">
								    		<?= $client->Libelle_client; ?>
								    	</a>
									<?php endif; ?>
								  </div>
							  <?php endforeach; ?>

							</div>

						<?php endif; ?>

					</div>

					<div class="col-sm-6 text-right">
						
					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-sm-12">&nbsp;</div>
	</div>
	
	<div class="container">
		<div class="row">

		    <div class="col-1">
		      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

		        <a class="nav-link" id="line-chart-tab" data-toggle="pill" href="#v-line-chart" role="tab"
		         aria-controls="v-line-chart" aria-selected="false"><i class="fa fa-line-chart fa-lg"></i></a>

		        <a class="nav-link" id="pie-chart-tab" data-toggle="pill" href="#v-pie-chart" role="tab" 
		        aria-controls="v-pie-chart" aria-selected="false"><i class="fa fa-pie-chart fa-lg"></i></a>

		        <a class="nav-link" id="bar-chart-tab" data-toggle="pill" href="#v-bar-chart" role="tab"
		         aria-controls="v-bar-chart" aria-selected="false"><i class="fa fa-bar-chart fa-lg"></i></a>
		      
		      </div>
		    </div>
		    <div class="col-11">

			    <div class="tab-content" id="v-pills-tabContent">
			        <!-- include chart views -->
			        <?php include ROOT.DS."view/analytics/$viewsToIncludes"; ?>

		      	</div>
			</div>


		</div>
	</div>

	<!-- <div class="container mt-3">
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-sm table-striped table-hover">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">#</th>
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
	</div> -->

</div>