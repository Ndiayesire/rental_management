
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="style.css">
<title>Menu Biens</title>

</head>
<body>
<div  class="shadow p-3 mb-5 bg-white rounded">
<div class="text-center">
<h1 class="shadow p-3 mb-5 bg-white rounded"> Bienvenue au menu Biens </h1>
<p>
<button type="button" class="btn btn-primary"> <a href = "Ajout Bien.php" style="color:white">Ajouter Bien </a></button>
</p>
<p>
<button type="button" class="btn btn-danger"><a href = "Suppression Bien.php"style="color:white">Supprimer Bien </a></button>
</p>
<p>
<button type="button" class="btn btn-success"> <a href = "Update Bien.php"style="color:white">Mettre à jour Bien </a></button>
</p>
</div>
</div>
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