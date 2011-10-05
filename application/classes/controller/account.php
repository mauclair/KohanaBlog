<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Account extends Mycontrollerlogin {

	public $template = 'basic';

	public function action_index()
	{
		$data = array();
		$myuser = new Model_Myuser();
		$data = $myuser->displayusername();

		if(isset($_POST['btnsubmit']))
		{
			$oldpass = Arr::get($_POST, 'oldpass', '');
			$newpass1 = Arr::get($_POST, 'newpass1', '');
			$newpass2 = Arr::get($_POST, 'newpass2', '');

			if($myuser->saveNewPass($oldpass, $newpass1, $newpass2))
			{
				$data['newpassok'] = '';
			}
			else
			{
				$data['errors'] = $myuser->getErrors();
			}
		}

		if(isset($_POST['btnsubmit2']))
		{
			$newname = Arr::get($_POST, 'username', '');
			$member = ORM::factory('userchange', $myuser->getId()); 
	        // Do an UPDATE query
	        $member->username = $newname;
	        try
        	{
            $member->save();
            // Redirect the user to his page
            $this->request->redirect('account/');
            $data['newuserok'] = '';
        	}
        	catch (ORM_Validation_Exception $e)
        	{
            $data['errors'] = $e->errors('validation');             
        	}
        	
		}

		if(isset($_POST['btnsubmit3']))
		{
			$regcode = new Model_Makecode;
			$invite = Arr::get($_POST, 'invite', '');
			$useful = new Model_Useful();
			$myuser->username = $invite;
			try
			{
				
				$myuser->check();
				$gencode = $useful->generatePassword(15);
		        $regcodetemp = ORM::factory('makecode');
		        $regcodetemp->code = $gencode;
		         try
		        {
		        $regcodetemp->save();
		        $regcode->send_code($invite, $data['username'], $gencode);
		        // Redirect the user to his page
		            $this->request->redirect('account/');
		            $data['inviteok'] = '';
		    	}
		    	catch (ORM_Validation_Exception $e)
		        {
		        $data['errors'] = $e->errors('validation');           
		       	}
		       		
			}
			catch (ORM_Validation_Exception $e)
	        {
	        $data['errors'] = $e->errors('validation');           
	       	}
        
        	
		}

		$this->template->content =  View::factory('accountview', $data);
	}

}
