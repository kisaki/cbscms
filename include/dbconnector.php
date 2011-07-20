<?php
// Class:	DBConnector
// Purpose:	Connect to a MYSQL database
require_once 'systemcomponent.php';

class DBConnector extends SystemComponent {
	
	var $theQuery;
	var $link;
	
	// function DBConnetor, as a Constructor will connect to the database
	function DBConnector(){
		// load settings from parent class
		$settings = SystemComponent::getSettings();
		
		// Get the main settings
		$host = $settings['dbhost'];
		$db = $settings['dbname'];
		$user = $settings['dbusername'];
		$pass = $settings['dbpassword'];
		
		// connect to the database..
		$this->link = mysql_connect($host,$user,$pass);
		mysql_select_db($db);
		register_shutdown_function(array(&$this, 'close'));
	}
	
	// function query for executing database queries
	function query($query){
		$this->theQuery = $query;
		return mysql_query($query, $this->link);
	}
	// function queryAndFetchArray to assist the coding
	function queryAndFetchArray($query){
		$this->theQuery = $query;
		$res = mysql_query($query, $this->link);
		return mysql_fetch_array($res,MYSQL_ASSOC);
	}
	//*** Function: getNumRows, Purpose: Return row count, MySQL version ***
	function getNumRows($result){
		return mysql_num_rows($result);
	}	
	
	function getAssocRows($result){
	  return mysql_fetch_assoc($result);
	}
	// function fetchArray for getting array of the query result
	function fetchArray($result){
		return mysql_fetch_array($result, MYSQL_ASSOC);
	}
	
	// function close for closing the connection
	function close(){
		mysql_close($this->link);
	}
}
?>
