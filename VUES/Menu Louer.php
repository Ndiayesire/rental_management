
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="style.css">
<title>Menu Location</title>

</head>
<body>
<div  class="shadow p-3 mb-5 bg-white rounded">
<div class="text-center">
<h1 class="shadow p-3 mb-5 bg-white rounded"> Bienvenue au menu Locations </h1>
<p>
<button type="button" class="btn btn-primary"> <a href = "Ajout Location.php" style="color:white">Ajouter Location </a></button>
</p>
<p>
<button type="button" class="btn btn-danger"><a href = "Suppression Location.php"style="color:white">Supprimer Location </a></button>
</p>
<p>
<button type="button" class="btn btn-success"> <a href = "Update Location.php"style="color:white">Mettre à jour Location </a></button>
</p>
</div>
</div>
<table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
        <tr>
            <th width="20"></th>
            <th>ID VILLE</th>
			<th>MATRICULE</th>
            <th>DATE DEBUT</th>
            <th>DATE FIN</th>
			<th>MONTANT CAUTION</th>
			<th>PRIX</th>
        </tr>
    </thead>
    <tbody id="tb">
        <?php
		include_once("SRC/connexion.php");
        $result= $db->query("SELECT * FROM louer where 1 ");
        if($result->num_rows>0){
            while($val  =   $result->fetch_assoc()){  ?>
            <tr>
                <td align="center"><i class="fa fa-fw fa-arrows-alt"></i></td>
                <td><?php echo $val['id_ville']; ?></td>
                <td><?php echo $val['matricule']; ?></td>
                <td><?php echo $val['date_debut']; ?></td>
                <td><?php echo $val['date_fin']; ?></td>
				 <td><?php echo $val['montant_caution']; ?></td>
				  <td><?php echo $val['prix']; ?></td>
            </tr>
            <?php
            }
        }else{ ?>
        <tr>
            <td colspan="5" class="bg-light text-center"><strong>Pas d'enregistrement !</strong></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>