<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class UnderConstruction extends CApplicationComponent
{
	 public $allowedIPs=array();
	 public $locked=false;
	 public $redirectURL='';

  public function init()
   {
   	// check if ip is blocked...
   		if($this->locked == true){
   			$allowed = false;
   			$ips=$this->allowedIPs;
   			foreach($ips as &$ip){
   				if($_SERVER['REMOTE_ADDR'] == $ip){
   					$allowed = true;
   				} 
   			}
			if($allowed == true){
				//do nothing
			}
			else{
				Yii::app()->request->redirect($this->redirectURL);
			}
   		
   		}
		else {
			//do nothing
		}
		
      
      

   }

}