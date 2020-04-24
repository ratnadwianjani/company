<?php
define('host', 'localhost');
define('user', 'root');
define('password', '');
define('db', 'oop')

/**
* 
*/
/**
 * 
 */
 class crudop{
	
	function __construct()
	{
		$this->conn=new mysqli(host,user,password,db);
		if (!$this->conn){
			echo "error in database connection: -> " .mysqli_connect()_error();
		}
		
	}
	
	public function setEmployeeName($name,$title){
		$sql="insert into class (name,title) values ('$name', '$title')";
		$insert=$this->conn->query ($sql);
		if($insert){
			echo "<p> data is insert<p>";
		}
	}

	public function display(){
		$query="SELECT * from class";
		$result=$this->conn->query($query);

		$counter=0;
		echo "<table border='2">
			<tr>
			<th> No </th>
			<th> Name </th>
			<th> Title </th>
			</tr>
		while($row=mysqli_fetch_assoc($result)){
			$counter++;
			echo "<tr> <td>";
			echo $counter;

			echo "<td>";
			echo $row['name'];
			echo "</td><td>";

			echo$row['title'];
			echo "</td><td>";
		}
	} 
}


class company
{
	
	function __construct()
	{
		$this->conn=new mysqli(host,user,password,db);
		if (!$this->conn){
			echo "error in database connection: -> " .mysqli_connect()_error();
		}
		
	}
	
	public function setCompanyName($name){
		$sql="insert into company (name) values ('$name')";
		$insert=$this->conn->query ($sql);
		if($insert){
			echo "<p> data is insert<p>";
		}
	}

	public function displaycom(){
		$query="SELECT * from company";
		$result=$this->conn->query($query);

		$counter=0;
		echo "<table border='2">
			<tr>
			<th> No </th>
			<th> Name </th>
			</tr>
		while($row=mysqli_fetch_assoc($result)){
			$counter++;
			echo "<tr> <td>";
			echo $counter;

			echo "<td>";
			echo $row['name'];
			echo "</td><td>";

		}
	}  
}

class departement{
	
	function __construct()
	{
		$this->conn=new mysqli(host,user,password,db);
		if (!$this->conn){
			echo "error in database connection: -> " .mysqli_connect()_error();
		}
		
	}
	
	public function setDepartement($name){
		$sql="insert into departement (name) values ('$name')";
		$insert=$this->conn->query ($sql);
		if($insert){
			echo "<p> data is insert<p>";
		}
	}

	public function displaydept(){
		$query="SELECT * from departement";
		$result=$this->conn->query($query);

		$counter=0;
		echo "<table border='2">
			<tr>
			<th> No </th>
			<th> Name </th>
			</tr>
		while($row=mysqli_fetch_assoc($result)){
			$counter++;
			echo "<tr> <td>";
			echo $counter;

			echo "<td>";
			echo $row['name'];
			echo "</td><td>";

		}
	} 
}
  ?>
