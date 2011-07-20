<?php
////////////////////////////////////////////////////////////////////////////////////////
// Class: SessionEntry
// Purpose: Control access to pages
///////////////////////////////////////////////////////////////////////////////////////
class SessionEntry {
	
	var $loggedin = false;	//	Boolean to store whether the user is logged in
	var $userdata;			//  Array to contain user's data
	
	function SessionEntry(){
		session_start();
		header("Cache-control: private"); 
	}
	
	//======================================================================================
	// Log out, destroy session
	function logout(){
		unset($this->userdata);
		session_destroy();
		return true;
	}

	//======================================================================================
	// Log in, and either redirect to goodRedirect or badRedirect depending on success
	function checkLogin($user = '',$password = '',$group = 10, $goodRedirect = '',$badRedirect = ''){

		// Include database and validation classes, and create objects
		require_once('dbconnector.php');
		require_once('validator.php');
		$validate = new Validator();
		$conn = new DBConnector();
		
		// If user is already logged in then check credentials
		if ($_SESSION['user'] && $_SESSION['pass']){

			// Validate session data
			if (!$validate->validateTextOnly($_SESSION['user'])){return false;}
			if (!$validate->validateTextOnly($_SESSION['pass'])){return false;}

			$getUser = $conn->query("SELECT * FROM cmsusers WHERE user = '".$_SESSION['user']."' AND pass = '".$_SESSION['pass']."' AND thegroup <= ".$group." AND enabled = 1");

			if ($conn->getNumRows($getUser) > 0){
				// Existing user ok, continue
				if ($goodRedirect != '') { 
					header("Location: ".$goodRedirect."?".strip_tags(session_id())) ;
				}			
				return true;
			}else{
				// Existing user not ok, logout
				$this->logout();
				return false;
			}
			
		// User isn't logged in, check credentials
		}else{	
			// Validate input
			if (!$validate->validateTextOnly($user)){return false;}
			if (!$validate->validateTextOnly($password)){return false;}

			// Look up user in DB
			$getUser = $conn->query("SELECT * FROM cmsusers WHERE user = '$user' AND pass = MD5('$password') AND thegroup <= $group AND enabled = 1");
			
			$this->userdata = $conn->fetchArray($getUser);

			if ($conn->getNumRows($getUser) > 0){
				// Login OK, store session details
				// Log in
				$_SESSION["user"] = $user;
				$_SESSION["pass"] = $this->userdata['pass'];
				$_SESSION["thegroup"] = $this->userdata['thegroup'];
								
				if ($goodRedirect) { 
					header("Location: ".$goodRedirect."?".strip_tags(session_id())) ;
				}
				return true;

			}else{
				// Login BAD
				unset($this->userdata);
				if ($badRedirect) { 
					header("Location: ".$badRedirect) ;
				}		
				return false;
			}
		}			
	}
}	
?>
