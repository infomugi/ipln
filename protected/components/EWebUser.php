<?php
class EWebUser extends CWebUser{
	protected $_model;

	protected function loadUser(){
		if($this->_model===null){
			$this->_model=Petugas::model()->findByPk($this->id);
		}
		return $this->_model;
	}

	function getLevelAccess(){
		$user = $this->loadUser();

		if($user){
			return $user->level;
		}
		return 100;
	}

	function getDivisionAccess(){
		$user = $this->loadUser();
		
		if($user){
			return $user->divisi;
		}
		return 100;
	}	

}
