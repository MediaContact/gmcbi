<?php 

/**
* 
*/
class Activites extends Model
{
	 
   	 public function getClient($idactivites){

    	$sql = 'SELECT * FROM activites  
    	        LEFT JOIN clients on activites.idclients  = clients.idclients
    	        WHERE 1';
    	$pre = $this->db->prepare($sql);
	    $pre->execute();
	    return $pre->fetchAll(PDO::FETCH_OBJ);
    }
}

 ?>