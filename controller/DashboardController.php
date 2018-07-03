<?php


class DashboardController extends Controller
{
	public function index(){
 
 			$this->loadModel('Departement');

 			$liste_departement  = $this->Departement->find();

 			$this->set('liste_departement',$liste_departement);
	 }

}

?>