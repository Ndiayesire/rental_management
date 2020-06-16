<?php

include_once("SRC/bien.class.php");
if(isset($_POST['del']))
    {

$id_bien=$_POST['id_bien'];
$deletedata=new DB_con();
$sql=$deletedata->delete($id_bien);
if($sql)
{

echo "<script>alert('Supprimé avec succés');</script>";
echo "<script>window.location.href='menu bien.php'</script>";
}
    }
?>


<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<title>Suppression Bien</title>

</head>
<body>


<h1 class ="text-center shadow p-3 mb-5 bg-white rounded" >Supprimer une ville</h1>
<p class="text-center" Style ="color:red"> Entrer l'ID du bien à supprimer !</p>

<form  method="post" name="insert" action="" class="text-center shadow p-3 mb-5 bg-white rounded">
  
  <div class="form-group">
 
      
        <label> ID BIEN </label>
        <div>
          <input type="text" name="id_bien">
        </div>
    
      <p>
	  </p>
      
   
            <button type="submit" name="del"  class="btn btn-danger">
              Supprimer
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
