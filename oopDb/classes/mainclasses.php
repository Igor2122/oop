<?php 

class Dhb
{
	private $host;
	private $login;
	private $passwrd;
	private $dbName;

	protected function connect()
	{
		$this->host = "localhost";
		$this->login = "root";
		$this->passwrd = "root";
		$this->dbName = "gbook";
				
		$con = new mysqli($this->host, $this->login, $this->passwrd, $this->dbName);
		return $con;
	}	
}

class User extends Dhb
{
	protected function getAllUsers()
	{
		$sql = "SELECT * FROM gbook";
		$result = $this->connect()->query($sql);
		$numRows = $result->num_rows;
		echo $num_rows;
		if ($numRows > 0) {
			while($row =  $result->fetch_assoc()){
				$data[] = $row;
			}
			return $data;
		}
	}
}


class viewUser extends User		
{
	public function showAllUsers()
	{
		$datas = $this->getAllUsers();
			foreach($datas as $data){
				// echo $data['id'];
				echo $data['name'];
				echo $data['email'];
		}
		
	}
}






