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
public function insert($nom_ville,$pays)
{
$ret=mysqli_query($this->dbh,"insert into ville(nom_ville,pays)
values('$nom_ville','$pays')");
return $ret;
}

public function update($nom_ville,$pays,$id_ville)
	{
	$updaterecord=mysqli_query($this->dbh,"update ville set nom_ville='$nom_ville',pays='$pays' where id_ville='$id_ville'");
	return $updaterecord;
	}
	
	
	
	public function delete($id_ville)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from ville where id_ville=$id_ville");
	return $deleterecord;
	}
	
	
	public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from ville");
	return $result;
	}
	
	public function fetchonerecord($id_ville)
	{
	$oneresult=mysqli_query($this->dbh,"select * from ville where id_ville=$id_ville");
	return $oneresult;
	}
}
?>