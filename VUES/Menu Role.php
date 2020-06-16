<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="style.css">
<title>Menu Role</title>

</head>
<body>
<div  class="shadow p-3 mb-5 bg-white rounded">
<div class="text-center">
<h1 class="shadow p-3 mb-5 bg-white rounded"> Bienvenue au menu Role </h1>
<p>
<button type="button" class="btn btn-primary"> <a href = "Ajout Role.php" style="color:white">Ajouter Role </a></button>
</p>
<p>
<button type="button" class="btn btn-danger"><a href = "Suppression Role.php"style="color:white">Supprimer Role </a></button>
</p>
<p>
<button type="button" class="btn btn-success"> <a href = "Update Role.php"style="color:white">Mettre à jour Role </a></button>
</p>
</div>
</div>
<table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
        <tr>
            <th width="20"></th>
            <th>ID ROLE</th>
            <th>STATUS ROLE</th>
            <th>CODE ROLE</th>
        </tr>
    </thead>
    <tbody id="tb">
        <?php
		include_once("SRC/connexion.php");
        $result= $db->query("SELECT * FROM Role where 1 ");
        if($result->num_rows>0){
            while($val  =   $result->fetch_assoc()){  ?>
            <tr>
                <td align="center"><i class="fa fa-fw fa-arrows-alt"></i></td>
                <td><?php echo $val['id_role']; ?></td>
                
                <td><?php echo $val['status_role']; ?></td>
                <td><?php echo $val['code_role']; ?></td>
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