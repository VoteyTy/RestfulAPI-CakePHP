<?php 
	class UsersController extends AppController{

		public function index(){

			$users = $this->User->find('all');
			$this->set('User',$users);
		}
	
	} 
?>