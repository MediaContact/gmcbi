<?php 

class DepartementdashboardController extends Controller
{

	public function index($iddepartement){

		debug($this);
		die();

		$this->loadModel('Departement');

		$ledepartement = $this->Departement->find(array("conditions"=>"iddepartement = ".$iddepartement));

		$leftmenu = $this->Helper->ViewMenu($iddepartement);

		$this->set("ledepartement",$ledepartement);
		$this->set("menu", $leftmenu);

	}

}

