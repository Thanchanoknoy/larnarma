<?php
	/**
	* 
	*/
	class Database
	{
		public $conn;
		public function __construct() {
			$m_host = "localhost"; 
		    $m_user = "root";
		    $m_pass = "123456";   
		    $m_name = "dblarnarma";
		    $this->conn = mysqli_connect($m_host, $m_user, $m_pass, $m_name);

		    if (!$this->conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
		}

		public function insert($sql) {
			mysqli_query($this->conn, $sql);
		}

		public function update($sql) {
			mysqli_query($this->conn, $sql);
		}

		public function delete($sql) {
			mysqli_query($this->conn, $sql);
		}

		public function select($sql) {
			return mysqli_query($this->conn, $sql);;
		}
	}

?>