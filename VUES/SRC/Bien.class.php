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
public function insert($nom_bien,$id_quartier,$disponibilite,$nombre_chambre,$nombre_sallon,$nombre_etage,$nombre_salle_de_bain,$description,$surface,$jardin,$matricule)
{
$ret=mysqli_query($this->dbh,"insert into bien_immobilier(nom_bien,id_quartier,disponibilite,nombre_chambre,nombre_sallon,nombre_etage,nombre_salle_de_bain,description,surface,jardin,matricule) values('$nom_bien','$id_quartier','$disponibilite','$nombre_chambre','$nombre_sallon','$nombre_etage','$nombre_salle_de_bain','$description','$surface','$jardin','$matricule')");
return $ret;
}

public function update($nom_bien,$id_quartier,$disponibilite,$nombre_chambre,$nombre_sallon,$nombre_etage,$nombre_salle_de_bain,$description,$surface,$jardin,$matricule,$id_bien)
	{
	$updaterecord=mysqli_query($this->dbh,"update bien_immobilier set nom_bien='$nom_bien',id_quartier='$id_quartier',disponibilite='$disponibilite',nombre_chambre='$nombre_chambre',nombre_sallon='$nombre_sallon',nombre_etage='$nombre_etage',nombre_salle_de_bain='$nombre_salle_de_bain',description='$description',surface='$surface',jardin='$jardin',matricule='$matricule' where id_bien='$id_bien'");
	return $updaterecord;
	}
	
	
	
	public function delete($id_bien)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from bien_immobilier where id_bien=$id_bien");
	return $deleterecord;
	}
	
	
	public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from bien_immobilier");
	return $result;
	}
	
	public function fetchonerecord($id_ville)
	{
	$oneresult=mysqli_query($this->dbh,"select * from bien_immobilier where id_bien=$id_bien");
	return $oneresult;
	}
}
?>