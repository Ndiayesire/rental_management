
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="style.css">
<title>Menu Quartier</title>

</head>
<body>
<div  class="shadow p-3 mb-5 bg-white rounded">
<div class="text-center">
<h1 class="shadow p-3 mb-5 bg-white rounded"> Bienvenue au menu Quartier </h1>
<p>
<button type="button" class="btn btn-primary"> <a href = "Ajout Quartier.php" style="color:white">Ajouter Quartier </a></button>
</p>
<p>
<button type="button" class="btn btn-danger"><a href = "Suppression Quartier.php"style="color:white">Supprimer Quartier </a></button>
</p>
<p>
<button type="button" class="btn btn-success"> <a href = "Update Quartier.php"style="color:white">Mettre à jour Quartier </a></button>
</p>

</div>
</div>
<table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
        <tr>
            <th width="20"></th>
            <th>ID QUARTIER</th>
            <th>ID VILLE</th>
			<th>NOM QUARTIER</th>
            
        </tr>
    </thead>
    <tbody id="tb">
        <?php
		include_once("SRC/connexion.php");
        $result= $db->query("SELECT * FROM quartier where 1 ");
        if($result->num_rows>0){
            while($val  =   $result->fetch_assoc()){  ?>
            <tr>
                <td align="center"><i class="fa fa-fw fa-arrows-alt"></i></td>
                <td><?php echo $val['id_quartier']; ?></td>
                
                <td><?php echo $val['id_ville']; ?></td>
                <td><?php echo $val['nom_quartier']; ?></td>
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