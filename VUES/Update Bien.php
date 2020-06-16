

<?php

include_once("SRC/bien.class.php");

$updatedata=new DB_con();
if(isset($_POST['update']))
{
$id_bien=$_POST['id_bien'];
$nom_bien=$_POST['nom_bien'];
$id_quartier=$_POST['id_quartier'];
$disponibilite=$_POST['disponibilite'];
$nombre_chambre=$_POST['nombre_chambre'];
$nombre_sallon=$_POST['nombre_sallon'];
$nombre_etage=$_POST['nombre_etage'];
$nombre_salle_de_bain=$_POST['nombre_salle_de_bain'];
$description=$_POST['description'];
$surface=$_POST['surface'];
$jardin=$_POST['jardin'];
$matricule=$_POST['matricule'];
$sql=$updatedata->update($nom_bien,$id_quartier,$disponibilite,$nombre_chambre,$nombre_sallon,$nombre_etage,$nombre_salle_de_bain,$description,$surface,$jardin,$matricule,$id_bien);

echo "<script>alert('Mise a jour avec succés');</script>";

echo "<script>window.location.href='menu bien.php'</script>";
}
?>
<html>
<head>

<title>Mise à Jour Biens</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1 class ="text-center shadow p-3 mb-5 bg-white rounded" >Mettre à jour un bien</h1>
<p class="text-center" Style ="color:red"> Entrer l'ID du bien à mettre à jour d'abord !</p>

<form  method="post" name="insert" action="" class="text-center shadow p-3 mb-5 bg-white rounded">
  
  <div class="form-group">
       <label> ID BIEN </label>
        <div>
          <input type="text" name="id_bien">
      	  </div>
      
	  <label> MATRICULE </label>
        <div>
          <input type="text" name="matricule">
        </div>
     
      
        <label > NOM BIEN </label>
        <div>
          <input type="text" name="nom_bien">
        </div>
		
		
		<label> ID QUARTIER </label>
        <div>
          <input type="text" name="id_quartier">
        </div>
     
      
        <label > DISPONIBILITE </label>
        <div>
          <input type="text" name="disponibilite">
        </div>
		
		<label> NOMBRE CHAMBRE </label>
        <div>
          <input type="text" name="nombre_chambre">
        </div>
     
      
        <label > NOMBRE SALLON </label>
        <div>
          <input type="text" name="nombre_sallon">
        </div>
		
		<label> NOMBRE ETAGE </label>
        <div>
          <input type="text" name="nombre_etage">
        </div>
     
      
        <label > NOMBRE SALLE DE BAIN </label>
        <div>
          <input type="text" name="nombre_salle_de_bain">
        </div>
		
		
		<label> DESCRIPTION </label>
        <div>
          <input type="text" name="description">
        </div>
     
      
        <label > SURFACE </label>
        <div>
          <input type="text" name="surface">
        </div>
		
		<label > JARDIN </label>
        <div>
          <input type="text" name="jardin">
        </div>
		
		
      <p>
	  </p>
      
   
            <button type="submit" name="update"  class="btn btn-success">
              Mettre à jour
            </button>
		
     </div>
     
   
 
</form>
<table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
        <tr>
            <th width="20"></th>
            <th>ID BIEN</th>
			<th>MATRICULE</th>
            <th>NOM BIEN</th>
			<th>ID QUARTIER</th>
            <th>DISPONIBILITE</th>
            <th>NOMBRE CHAMBRE</th>
			<th>NOMBRE SALON</th>
            <th>NOMBRE ETAGE</th>
            <th>NOMBRE SDB</th>
			<th>DESCRIPTION</th>
            <th>SURFACE</th>
            <th>JARDIN</th>
			
        </tr>
    </thead>
    <tbody id="tb">
        <?php
		include_once("SRC/connexion.php");
        $result= $db->query("SELECT * FROM bien_immobilier where 1 ");
        if($result->num_rows>0){
            while($val  =   $result->fetch_assoc()){  ?>
            <tr>
                <td align="center"><i class="fa fa-fw fa-arrows-alt"></i></td>
                <td><?php echo $val['id_bien']; ?></td>
                
                <td><?php echo $val['matricule']; ?></td>
                <td><?php echo $val['nom_bien']; ?></td>
				<td><?php echo $val['id_quartier']; ?></td>
                
                <td><?php echo $val['disponibilite']; ?></td>
                <td><?php echo $val['nombre_chambre']; ?></td>
				<td><?php echo $val['nombre_sallon']; ?></td>
                
                <td><?php echo $val['nombre_etage']; ?></td>
                <td><?php echo $val['nombre_salle_de_bain']; ?></td>
				<td><?php echo $val['description']; ?></td>
                
                <td><?php echo $val['surface']; ?></td>
                <td><?php echo $val['jardin']; ?></td>
            </tr>
            <?php
            }
        }else{ ?>
        <tr>
            <td colspan="5" class="bg-light text-center"><strong>Pas d'enrégistrement !</strong></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
