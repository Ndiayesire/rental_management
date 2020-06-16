<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'locations');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;

if (mysqli_connect_errno())
{
echo "Erreur lors de la connexion : " . mysqli_connect_error();
}
}
public function insert($status_role,$code_role)
{
$ret=mysqli_query($this->dbh,"insert into role(status_role,code_role)
values('$status_role','$code_role')");
return $ret;
}

public function update($status_role,$code_role,$id_role)
	{
	$updaterecord=mysqli_query($this->dbh,"update role set status_role='$status_role',code_role='$code_role' where id_role='$id_role'");
	return $updaterecord;
	}
	
	
	
	public function delete($id_role)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from role where id_role=$id_role");
	return $deleterecord;
	}
	
	
	public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from role");
	return $result;
	}
	
	public function fetchonerecord($id_role)
	{
	$oneresult=mysqli_query($this->dbh,"select * from ville where id_ville=$id_role");
	return $oneresult;
	}
}
?>