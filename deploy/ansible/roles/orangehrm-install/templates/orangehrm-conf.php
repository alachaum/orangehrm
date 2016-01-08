<?php
/*
// OrangeHRM is a comprehensive Human Resource Management (HRM) System that captures
// all the essential functionalities required for any enterprise.
// Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com

// OrangeHRM is free software; you can redistribute it and/or modify it under the terms of
// the GNU General Public License as published by the Free Software Foundation; either
// version 2 of the License, or (at your option) any later version.

// OrangeHRM is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
// without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// See the GNU General Public License for more details.

// You should have received a copy of the GNU General Public License along with this program;
// if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor,
// Boston, MA  02110-1301, USA
*/

class Conf {

	var $dbhost;
	var $dbport;
	var $dbname;
	var $dbuser;
	var $version;
	var $smtphost;

	var $emailConfiguration;
	var $logPath;

	function Conf() {

		$this->dbhost	= 'localhost';
		$this->dbport 	= '3306';
		$this->dbname	= '{{ orangehrm_db_name }}';
		$this->dbuser   = '{{ orangehrm_db_user }}';
		$this->dbpass	= '{{ orangehrm_db_password }}';
		$this->smtphost = 'localhost';
		$this->version = '3.3.2';
		$this->emailConfiguration = dirname(__FILE__).'mailConf.php';
		$this->logPath =  realpath(dirname(__FILE__).'/../logs/').'/';

	}
}

?>
