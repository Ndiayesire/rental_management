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
public function insert($matricule,$date_debut,$date_fin,$montant_caution,$prix)
{
$ret=mysqli_query($this->dbh,"insert into louer (matricule,date_debut,date_fin,montant_caution,prix)
values('$matricule','$date_debut','$date_fin','$montant_caution','$prix')");
return $ret;
}

public function update($matricule,$date_debut,$date_fin,$montant_caution,$prix,$id_ville)
	{
	$updaterecord=mysqli_query($this->dbh,"update louer set matricule='$matricule',date_debut='$date_debut',date_fin='$date_fin',montant_caution='$montant_caution',prix='$prix' where id_ville='$id_ville'");
	return $updaterecord;
	}
	
	
	
	public function delete($matricule)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from louer where matricule=$matricule");
	return $deleterecord;
	}
	
	
	public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from louer");
	return $result;
	}
	
	public function fetchonerecord($id_ville)
	{
	$oneresult=mysqli_query($this->dbh,"select * from louer where id_ville=$id_ville");
	return $oneresult;
	}
}
?>