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
public function insert($matricule,$id_role)
{
$ret=mysqli_query($this->dbh,"insert into avoir(matricule,id_role)
values('$matricule','$id_role')");
return $ret;
}

public function update($id_role,$matricule)
	{
	$updaterecord=mysqli_query($this->dbh,"update avoir set id_role='$id_role' where matricule='$matricule'");
	return $updaterecord;
	}
	
	
	
	public function delete($matricule)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from avoir where matricule=$matricule");
	return $deleterecord;
	}
	
	
	public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from avoir");
	return $result;
	}
	
	public function fetchonerecord($matricule)
	{
	$oneresult=mysqli_query($this->dbh,"select * from avoir where matricule=$matricule");
	return $oneresult;
	}
}
?>