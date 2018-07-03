<?php 

/**
* 
*/
class Chiffres_finances extends Model
{
	public function getDonnees($type = NULL){

    	$sql = 'SELECT valeur, date_saisie, commentaire FROM chiffres_finances as don';
    	$pre = $this->db->prepare($sql);
	    $pre->execute();
	    return $pre->fetchAll(PDO::FETCH_OBJ);
    }
   
}

 ?>