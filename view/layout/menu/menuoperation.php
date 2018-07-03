

<a href="<?php echo BASE_URL ?>/dashboard" class="br-menu-link bg-danger active">
	<div class="br-menu-item">
		<i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
		<span class="menu-item-label">Dashboard</span>
	</div>
</a>

<a href="" class="br-menu-link">
	<div class="br-menu-item">
		<i class="menu-item-icon icon ion-ios-chatboxes-outline tx-22"></i>
		<span class="menu-item-label">Messages</span>
	</div>
</a>

<a href="#" class="br-menu-link bg-danger active">
	<div class="br-menu-item">
		<i class="menu-item-icon ion-ios-barcode-outline tx-24"></i>
		<span class="menu-item-label ">Réception</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	</div> 
</a> 
<ul class="br-menu-sub nav flex-column">
  <li class="nav-item "><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/rec_qos/'.$_SESSION['idfiliale']; ?>" class="nav-link active">QOS (Qualité de service)</a></li>
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/rec_eff/'.$_SESSION['idfiliale']; ?>" class="nav-link">Efficacité</a></li>
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/rec_fcr/'.$_SESSION['idfiliale']; ?>" class="nav-link">FCR (Taux de Résolution)</a></li>
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/rec_dma/'.$_SESSION['idfiliale']; ?>" class="nav-link">DMA (Durée Moyenne d'Attente)</a></li>
</ul>

<a href="#" class="br-menu-link">
	<div class="br-menu-item">
		<i class="menu-item-icon ion-ios-megaphone-outline tx-24"></i>
		<span class="menu-item-label">Emission</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	</div> 
</a>
<ul class="br-menu-sub nav flex-column">
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/emi_txcon/'.$_SESSION['idfiliale']; ?>" class="nav-link">Taux de concrétisation</a></li>
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/emi_nbcon/'.$_SESSION['idfiliale']; ?>" class="nav-link">Nombre de contrat transformés en vente</a></li>
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/emi_txtran/'.$_SESSION['idfiliale']; ?>" class="nav-link">Taux de transformation</a></li>
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/emi_nbargu/'.$_SESSION['idfiliale']; ?>" class="nav-link">Nombre de contact argumenté de l'heure</a></li>
</ul>

<a href="#" class="br-menu-link">
	<div class="br-menu-item">
		<i class="menu-item-icon ion-ios-mail-outline tx-24"></i>
		<span class="menu-item-label">Digital</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	</div> 
</a>
<ul class="br-menu-sub nav flex-column">
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/dig_qos/'.$_SESSION['idfiliale']; ?>" class="nav-link">QOS (Qualité de service)</a></li>
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/dig_delai/'.$_SESSION['idfiliale']; ?>" class="nav-link">Delai de la première réponse</a></li>
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/dig_fcr/'.$_SESSION['idfiliale']; ?>" class="nav-link">FCR (Taux de Résolution)</a></li>
</ul>
<a href="#" class="br-menu-link">
	<div class="br-menu-item">
		<i class="menu-item-icon ion-ios-desktop-outline tx-24"></i>
		<span class="menu-item-label">Back Office</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	</div> 
</a>
<ul class="br-menu-sub nav flex-column">
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/bac_txcon/'.$_SESSION['idfiliale']; ?>" class="nav-link">Taux de conformité</a></li>
</ul>

<a href="#" class="br-menu-link">
	<div class="br-menu-item">
		<i class="menu-item-icon ion-ios-desktop-outline tx-24"></i>
		<span class="menu-item-label">Vente Terrain</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	</div> 
</a>
<ul class="br-menu-sub nav flex-column">
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/bac_txcon/'.$_SESSION['idfiliale']; ?>" class="nav-link">Taux de conformité</a></li>
</ul>

<a href="<?php echo BASE_URL ?>/analytics/data/<?= $_SESSION['userInfodepartementId']; ?>" class="br-menu-link">
	<div class="br-menu-item">
		<i class="menu-item-icon ion-ios-edit tx-24"></i>
		<span class="menu-item-label">Mise à jour des données</span>
	</div> 
</a>