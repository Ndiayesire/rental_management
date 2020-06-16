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
public function insert($matricule,$nom,$prenom,$telephone,$email,$adresse,$date_de_naisance)
{
$ret=mysqli_query($this->dbh,"insert into personne (matricule,nom,prenom,telephone,email,adresse,date_de_naisance)
values('$matricule','$nom','$prenom','$telephone','$email','$adresse','$date_de_naisance')");
return $ret;
}


public function update($nom,$prenom,$telephone,$email,$adresse,$date_de_naisance,$matricule)
	{
	$updaterecord=mysqli_query($this->dbh,"update personne set nom='$nom',prenom='$prenom',email='$email',telephone='$telephone',adresse='$adresse',date_de_naisance='$date_de_naisance' where matricule='$matricule'");
	return $updaterecord;
	}
	
	
	
	public function delete($matricule)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from personne where matricule=$matricule");
	return $deleterecord;
	}
	
	
	public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from personne");
	return $result;
	}
	
	public function fetchonerecord($matricule)
	{
	$oneresult=mysqli_query($this->dbh,"select * from personne where matricule=$matricule");
	return $oneresult;
	}
}
?>