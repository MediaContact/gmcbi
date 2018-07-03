<?php 
/**
* 
*/
class User extends Model
{
	
    public function agentconnecte(){

    	 
    }

    public function userbyprofil(){

    	$sql = 'SELECT * FROM user 
    	        LEFT JOIN profil on idprofil = profil_id';
    	$pre = $this->db->prepare($sql);
	    $pre->execute();
	    return $pre->fetchAll(PDO::FETCH_OBJ);
    }
   
}
 ?>