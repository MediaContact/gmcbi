<?php 

class AnalyticsController extends Controller{

	private $months = array("01" => "Janvier", "02" => "Février","03" => "Mars","04" => "Avril","05" => "Mai","06" => "Juin",
	"07" => "Juillet","08" => "Août", "09" => "Septembre","10" => "Octobre","11" => "Novembre","12" => "Décembre");
	
	public function index($iddepartement){

		$this->Session->write("userInfodepartementId", $iddepartement);
		
		$this->loadModel('Departement');

		$ledepartement = $this->Departement->find(array("conditions"=>"iddepartement = ".$iddepartement));

		$leftmenu = $this->Helper->ViewMenu($iddepartement);

		// unset($_SESSION['userInfodepartementId']);

		$this->set("ledepartement", $ledepartement);
		$this->set("menu", $leftmenu);
	}

	/**
	*
	*
	**/
	public function views($iddepartement, $type = null, $idpays = null, $idactivites = null){

		$this->loadModel('Departement');		
		$this->loadModel('Indicateur');

		$date_debut = "";
		$date_fin = "";

		$ledepartement = $this->Departement->find(array("conditions"=>"iddepartement = ".$iddepartement));
		$letype = $this->Indicateur->find(array("conditions"=>"type = '".$type."' "));

		$mois = date('m');
		$annee = date('Y');

		if(isset($this->request->data->date_debut)){

			$date_debut = $this->request->data->date_debut;
			$date_fin = $this->request->data->date_fin;
		}
		else{

			$date_debut =  "2018-01-01";
			//$date_debut =   date("Y-m-d", mktime(0, 0, 0, $mois, 1 ,$annee));
			$date_fin   =	"2018-12-31";
			//$date_fin   =	date("Y-m-d", mktime(0, 0, 0, $mois +1, 0, $annee));
		}

		$viewsToIncludes = '';

		switch ($iddepartement) {
			case 1: // Département des opérations
				
				$this->loadModel('Clients');
				$this->loadModel('Donnees_operations');
				$this->loadModel('Type_activite');
				$this->loadModel('Activites');

				$lesclients = $this->Clients->find(array("conditions"=>"idpays = ".$idpays));

				foreach ($lesclients as $key => $client) {
				
					$lesactivites = $this->Activites->find(array("conditions"=>" idclients = ".$client->idclients));
					$client->lesactivites = $lesactivites;
				}
				
				if(isset($idactivites)){

					$donnees = $this->Donnees_operations->find(array("conditions" => "idactivites =".$idactivites." 
						AND type_indicateur = '".$type."' AND date_saisie between '".$date_debut."' AND '".$date_fin."' ","ORDER"));

					 foreach ($donnees as $key => $donnee) {
					 	 
					 	 foreach ($this->months as $keys => $month) {

					 	 	if($keys == date("m", strtotime($donnee->date_saisie))) 
					 	 	{
					 	 		$donnee->lemois = $month;
					 	 	}
					 	 }
					 }


				 	$leclient = $this->Activites->getClient($idactivites);
					//debug($donnees); die();
				    $this->set("leclient", $leclient);
				    $this->set("donnees", $donnees);
				}

				$viewsToIncludes = 'doperationsviews.php';

				$this->set("lesclients", $lesclients);
				$this->set("idactivites", $idactivites);
				$this->set("viewsToIncludes", $viewsToIncludes);

				break;

			case 2: // Département qualité

				$viewsToIncludes = 'dqualiteviews.php';
				$this->set("donnees", $donnees);
				$this->set("viewsToIncludes", $viewsToIncludes);
				break;

			case 3: // Département finance

				$this->loadModel('Chiffres_finances');

				$donnees = $this->Chiffres_finances->find(array("conditions" => "type_indicateur = '".$type."' AND date_saisie between '".$date_debut."' AND '".$date_fin."' ","ORDER"));

				foreach ($donnees as $donnee) {
				 	 
				 	 foreach ($this->months as $keys => $month) {

				 	 	if($keys == date("m", strtotime($donnee->date_saisie))) 
				 	 	{
				 	 		$donnee->lemois = $month;
				 	 	}
				 	 }
				}

				$viewsToIncludes = 'dfinancesviews.php';
				$this->set("donnees", $donnees);
				$this->set("viewsToIncludes", $viewsToIncludes);
				break;

			case 4: // DSI

				$viewsToIncludes = 'dsiviews.php';
				$this->set("donnees", $donnees);
				$this->set("viewsToIncludes", $viewsToIncludes);
				break;

			case 5: // Ressources Humaines

				$viewsToIncludes = 'drhviews.php';
				$this->set("donnees", $donnees);
				$this->set("viewsToIncludes", $viewsToIncludes);
				break;

			case 6: // Services généreaux

				$viewsToIncludes = 'dsgviews.php';
				$this->set("donnees", $donnees);
				$this->set("viewsToIncludes", $viewsToIncludes);
				break;

			case 7: // Marketing et Communication

				$viewsToIncludes = 'dcomviews.php';
				$this->set("donnees", $donnees);
				$this->set("viewsToIncludes", $viewsToIncludes);
				break;

			case 8: // Recrutement

				$viewsToIncludes = 'drecrutementsviews.php';
				$this->set("donnees", $donnees);
				$this->set("viewsToIncludes", $viewsToIncludes);
				break;

			case 9:

				break;

			case 10: // Recherche et Innovation

				$viewsToIncludes = 'driviews.php';
				$this->set("donnees", $donnees);
				$this->set("viewsToIncludes", $viewsToIncludes);
				break;

			case 11: // ABFPA

				$viewsToIncludes = 'abfpaviews.php';
				$this->set("donnees", $donnees);
				$this->set("viewsToIncludes", $viewsToIncludes);
				break;
			
			default:
				# code...
				break;
		}
		

		$leftmenu = $this->Helper->ViewMenu($iddepartement);

		$this->set("date_debut", $date_debut);
		$this->set("date_fin", $date_fin);
		$this->set("letype", $letype);
		$this->set("menu", $leftmenu);
		$this->set("ledepartement", $ledepartement);
		$this->set("iddepartement", $iddepartement);
		$this->set("type", $type);
		$this->set("idpays", $idpays);
 
	}


		/*

		if($this->request->data->action=="editNote")
		{

				if ($this->request->data) {
				
				$dataID=$this->Donnees_operations->find(array
		    	('conditions' => 'date_saisie ="'.date("Y-m-d",strtotime($this->request->data->dataDate)).'"  ') );
		    	
				if(!empty($dataID)){

							 $tab4 = array();
							 		 $tab4['valeur'] = $this->request->data->dataValeur;
							 		 $tab4['iddonnees_operation'] = $dataID[0]["iddonnees_operation"];
							 		 $tab4['idactivites'] =$this->request->data->dataidactivites;
							 		 $tab4['type_indicateur'] =$this->request->data->datatype;
				                  	 $obj4 =  $this->arrayToObject($tab4);
							 		 $this->Donnees_operations->save($obj4);

							 		
							$this->Session->setFlash("Modification Reussi </b> ","info");
				}
				else
				{
					$this->Session->setFlash("<h4><b>Parametre non valide</b></h4>","warning");
					$this->Session->setError();	
			    }

			   }



			}


		if($this->request->data->action=="delNote")
		{

				if ($this->request->data) {
				
				$dataID=$this->Donnees_operations->find(array
		    	('conditions' => 'date_saisie ="'.date("Y-m-d",strtotime($this->request->data->dataDate)).'"  ') );
		    	
				if(!empty($dataID)){

							$this->Session->setFlash("<h4><b>La suppression n'est pas encore autorisé, Veuillez contacter votre administrateur </b></h4>","warning");
					$this->Session->setError();	
				}
				else
				{
					$this->Session->setFlash("<h4><b>Parametre non valide</b></h4>","warning");
					$this->Session->setError();	
			    }

			   }



			}*/

public function data($iddepartement){

			$this->loadModel('Departement');
			$this->loadModel('Activites');
			$this->loadModel('Chiffres_finances');

		//Ajout d'une nouvelle valeur
		if(isset($this->request->data->action))
		if($this->request->data->action=="addVal")
		{
				
				$dataID=$this->Chiffres_finances->find(array
		    	('conditions' => 'date_saisie ="'.date("Y-m-d",strtotime($this->request->data->dataDate)).'" AND type_indicateur ="'.$this->request->data->datatype.'"') );
		    	
				if(empty($dataID)){

							 $tab4 = array();
							 		 $tab4['valeur'] = $this->request->data->dataValeur;
							 		 $tab4['date_saisie'] = date("Y-m-d",strtotime($this->request->data->dataDate));
							 		 $tab4['commentaire'] =$this->request->data->commentaire;
							 		 $tab4['type_indicateur'] =$this->request->data->datatype;
				                  	 $obj4 =  $this->arrayToObject($tab4);
							 		 $this->Chiffres_finances->save($obj4);

							 		
							$this->Session->setFlash("Sauvegarde Reussie </b> ","info");
				}
				else
				{
					$this->Session->setFlash("<h6><b>Date déja enregistré, Veuillez choisir la modification ou changer la date</b></h6>","warning");
					$this->Session->setError();	
			    }

			   }

		if($this->request->data->action=="editNote")
		{

			
				$dataID=$this->Chiffres_finances->find(array
		    	('conditions' => 'date_saisie ="'.date("Y-m-d",strtotime($this->request->data->dataDate)).'" AND type_indicateur ="'.$this->request->data->datatype.'" ') );
		    	
				if(!empty($dataID)){

					var_dump($dataID);

							 $tab4 = array();
							 		 $tab4['valeur'] = $this->request->data->dataValeur;
							 		 $tab4['idchiffres_finances'] = $dataID[0]->idchiffres_finances;
							 		 $tab4['date_saisie'] =date("Y-m-d",strtotime($this->request->data->dataDate));
							 		 $tab4['type_indicateur'] =$this->request->data->datatype;
							 		 $tab4['commentaire'] =$this->request->data->commentaire;
				                  	 $obj4 =  $this->arrayToObject($tab4);
							 		 $this->Chiffres_finances->save($obj4);

							 		
							$this->Session->setFlash("Modification Reussie </b> ","info");
				}
				else
				{
					$this->Session->setFlash("<h4><b>Parametre non valide</b></h4>","warning");
					$this->Session->setError();	
			    }

			   }




		$leftmenu = $this->Helper->ViewMenu($iddepartement);
		$this->set("menu", $leftmenu);
		


}





}

