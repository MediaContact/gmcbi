


<a href="<?php echo BASE_URL ?>/dashboard" class="br-menu-link bg-br-primary active">
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

<a href="#" class="br-menu-link bg-danger active ">
	<div class="br-menu-item">
		<i class="menu-item-icon ion-ios-barcode-outline tx-24"></i>
		<span class="menu-item-label ">Elément de salaire</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	</div> 
</a> 
<ul class="br-menu-sub nav flex-column">
  <li class="nav-item "><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/fin_msa/'.$_SESSION['idfiliale']; ?>" class="nav-link active">Evolution de la masse salariale</a></li>
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/fin_cso/'.$_SESSION['idfiliale']; ?>" class="nav-link">Evolution des charges sociales</a></li>
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/fin_irts/'.$_SESSION['idfiliale']; ?>" class="nav-link">Evolution IRPP / TS</a></li>
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/fin_vps/'.$_SESSION['idfiliale']; ?>" class="nav-link">Evolution VPS</a></li>
  <li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/fin_nap/'.$_SESSION['idfiliale']; ?>" class="nav-link">Evolution Net à payer (NAP)</a></li>
</ul>

<a href="#" class="br-menu-link">
	<div class="br-menu-item">
		<i class="menu-item-icon ion-ios-barcode-outline tx-24"></i>
		<span class="menu-item-label">Les chiffres</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	</div> 
</a>
<ul class="br-menu-sub nav flex-column">
  	<li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/fin_ca/'.$_SESSION['idfiliale']; ?>" class="nav-link">Chiffres d'affaires</a></li>
  	<li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/fin_cha/'.$_SESSION['idfiliale']; ?>" class="nav-link">Charges</a></li>
  	<li class="nav-item"><a href="<?php echo BASE_URL ?>/analytics/views/<?php echo $_SESSION['userInfodepartementId'].'/fin_obj/'.$_SESSION['idfiliale']; ?>" class="nav-link">Objectifs</a></li>
</ul>

<a href="<?php echo BASE_URL ?>/analytics/data/<?= $_SESSION['userInfodepartementId'] ?>" class="br-menu-link">
	<div class="br-menu-item">
		<i class="menu-item-icon ion-ios-edit tx-24"></i>
		<span class="menu-item-label">Mise à jour des données</span>
	</div> 
</a>