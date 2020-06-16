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
public function insert($nom_bien,$code_du_bien)
{
$ret=mysqli_query($this->dbh,"insert into type_bien(nom_bien,code_du_bien)
values('$nom_bien','$code_du_bien')");
return $ret;
}

public function update($nom_bien,$code_du_bien)
	{
	$updaterecord=mysqli_query($this->dbh,"update type_bien set nom_bien='$nom_bien' where code_du_bien='$code_du_bien'");
	return $updaterecord;
	}
	
	
	
	public function delete($code_du_bien)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from type_bien where code_du_bien=$code_du_bien");
	return $deleterecord;
	}
	
	
	public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from type_bien");
	return $result;
	}
	
	public function fetchonerecord($nom_bien)
	{
	$oneresult=mysqli_query($this->dbh,"select * from type_bien where nom_bien=$nom_bien");
	return $oneresult;
	}
}
?>