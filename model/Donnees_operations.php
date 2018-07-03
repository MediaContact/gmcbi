<?php 

/**
* 
*/
class Donnees_operations extends Model
{
	 public function getDonnees($type,$idactivites){

    	$sql = 'SELECT valeur,date_saisie,commentaire,Libelle_activite,Libelle_client FROM donnees_operations as don
    	        LEFT JOIN activites on activites.idactivites  = don.idactivites
    	        LEFT JOIN clients on clients.idclients = activites.idclients
    	        WHERE activites.idtype_activite = '.$type.' AND activites.idactivites = '.$idactivites;
    	$pre = $this->db->prepare($sql);
	    $pre->execute();
	    return $pre->fetchAll(PDO::FETCH_OBJ);
    }
   
}

 ?>