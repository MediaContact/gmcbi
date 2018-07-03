<?php


class UsersController extends Controller
{
	public function index(){

		$this->loadModel('User');

		$listeuser = $this->User->userbyprofil();

		$this->set('listeuser',$listeuser);
	 }

}

?>