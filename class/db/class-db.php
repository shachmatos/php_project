<?php

class db {
	private $server;
	private $username;
	private $password;
	private $database;
	private $connection;
	private $last_query;
	
	private $debug = FALSE;
	// CONSTRUCTOR
	public function __construct($server, $username, $password, $database, $debug = FALSE) {
		$this->server = $server;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
		$this->open_connection_db();
	}
	// method to open a connection
	public function open_connection_db() {
		if ($this->debug == TRUE) {
			echo "----DEBUG-MODE-DATABASE----<br />";
			echo "----CONNECTING----<br />";
		}
		$this->connection = mysqli_connect($this->server, $this->username, $this->password, $this->database) 
		or die("Could not connect to Database: " . mysqli_error($this->connection));
	}
	// method to close and unset connection
	public function close_connection_db() {
		if ($this->debug == TRUE) {
			echo "----DEBUG-MODE-DATABASE----<br />";
			echo "----CLOSING-CONNECTION----<br />";
		}
		if ($this->connection) {
			$this->connection->close();
			unset($this->connection);
		}
	}
	// method to query the database
	public function query($sql) {
		if ($this->debug == TRUE) {
			echo "----DEBUG-MODE-DATABASE---- <br />";
			var_dump($sql);
		}
		$this->last_query = $sql;
		$result = $this->connection->query($sql)
			or die("Cannot query database: " . mysqli_error($this->connection));
		$rows = mysqli_fetch_object($result);
		return $rows;
	}
}
