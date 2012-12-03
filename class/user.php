<?php
/**
 * User class for system
 *
 * @package core
 * @author  shachmatos
 */
class user {
	private $user_system_id;
	private $firstname;
	private $lastname;
	private $password;
	private $email;
	private $level;
	private $status;
	private $time_registered;
	private $last_online;
	
	public function user_veri($username, $password) {
		global $DB, $CONF;
		$sql = "SELECT * ";
		$sql .= "FROM user ";
		$sql .= "WHERE firstname = 'yftah' AND password = 'testpass'";
		$result = $DB->query($sql);
		if ($result) {
			$_SESSION['id'] = $result->id;
			$_SESSION['firstname'] = $result->firstname;
			$_SESSION['lastname'] = $result->lastname;
			return TRUE;
		} else {
			return FALSE;
		}
	}
} // END
