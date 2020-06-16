<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="style.css">
<title>Menu Type de Biens</title>

</head>
<body>
<div  class="shadow p-3 mb-5 bg-white rounded">
<div class="text-center">
<h1 class="shadow p-3 mb-5 bg-white rounded"> Bienvenue au menu Type de Biens </h1>
<p>
<button type="button" class="btn btn-primary"> <a href = "Ajout tbien.php" style="color:white">Ajouter Type de Biens </a></button>
</p>
<p>
<button type="button" class="btn btn-danger"><a href = "Suppression tbien.php"style="color:white">Supprimer Type de Biens </a></button>
</p>
<p>
<button type="button" class="btn btn-success"> <a href = "Update tbien.php"style="color:white">Mettre à jour Type de Biens </a></button>
</p>
</div>
</div>
<table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
        <tr>
            <th width="20"></th>
            <th>NOM BIEN</th>
            <th>CODE DU BIEN</th>
            
        </tr>
    </thead>
    <tbody id="tb">
        <?php
		include_once("SRC/connexion.php");
        $result= $db->query("SELECT * FROM type_bien where 1 ");
        if($result->num_rows>0){
            while($val  =   $result->fetch_assoc()){  ?>
            <tr>
                <td align="center"><i class="fa fa-fw fa-arrows-alt"></i></td>
                <td><?php echo $val['Nom_bien']; ?></td>
                
                <td><?php echo $val['Code_du_bien']; ?></td>
              
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