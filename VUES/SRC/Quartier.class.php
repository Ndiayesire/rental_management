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
public function insert($id_ville,$nom_quartier)
{
$ret=mysqli_query($this->dbh,"insert into quartier (id_ville,nom_quartier)
values('$id_ville','$nom_quartier')");
return $ret;
}

public function update($id_ville,$nom_quartier,$id_quartier)
	{
	$updaterecord=mysqli_query($this->dbh,"update quartier set id_ville='$id_ville',nom_quartier='$nom_quartier' where id_quartier='$id_quartier'");
	return $updaterecord;
	}
	
	
	
	public function delete($id_ville)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from quartier where id_ville=$id_ville");
	return $deleterecord;
	}
	
	
	public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from quartier");
	return $result;
	}
	
	public function fetchonerecord($id_quartier)
	{
	$oneresult=mysqli_query($this->dbh,"select * from quartier where id_quartier=$id_quartier");
	return $oneresult;
	}
}
?>