<?php
class SystemComponent {
	var $settings;	
	function getSettings() {
		// System variables
		$settings['siteDir'] = '/';
		
		// Database variables
		$settings['dbhost'] = 'localhost';
		$settings['dbusername'] = 'kisaki';
		$settings['dbpassword'] = 'developer';
		$settings['dbname'] = 'cmsdb';
		
		return $settings;
	}
}
?>
