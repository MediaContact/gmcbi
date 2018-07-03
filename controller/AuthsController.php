<?php


class AuthsController extends Controller
{
	public function index(){}

	public function connect(){
		$userId=array();
		$this->loadModel('Login');
		$this->loadModel('Filiale');

		if($this->request->data){
			$this->request->data->idfiliale = 1;
			$userId=$this->Login->find(array
			('conditions' => 'pass ="'.$this->request->data->pass.'"
			AND username ="'.$this->request->data->username.'" AND idfiliale ="'.$this->request->data->idfiliale.'"') );

			if(!is_null($userId)){

				if(isset($userId[0])){

					$this->Session->setLogged($userId[0]->idlogin);
					$this->Session->write("userInfoName",$userId[0]->nom);
					$this->Session->write("userInfoSurname",$userId[0]->prenom);
					// $this->Session->write("userInfodepartementId", $userId[0]->iddepartement);
					$this->Session->write("idfiliale",$userId[0]->idfiliale);
					$this->Session->write("idfiliale_choix",$this->request->data->idfiliale);
					$userdep=$this->Filiale->find(array('conditions' => 'idfiliale = "'.$this->request->data->idfiliale.'" ')
						);

					$this->Session->setFlash("WELCOME <b>".$userId[0]->nom." ".$userId[0]->prenom."</b> dans Media Contact ".$userdep[0]->Libelle_filiale." ","success");
					$this->redirect('dashboard',30);
				}
			
				else{
					$this->Session->setFlash("<h4><b>Identifiant ou mot de passe incorrects</b></h4>","danger");
					$this->Session->setError();
				}
			}
		}

		$this->render('connect','nolayout');
	}


	public function disconnect(){
		$this->Session->disconnect();
	}

}

?>
