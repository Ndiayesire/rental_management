

<?php

include_once("SRC/ville.class.php");

$updatedata=new DB_con();
if(isset($_POST['update']))
{

$id_ville=$_POST['id_ville'];
$nom_ville=$_POST['nom_ville'];
$pays=$_POST['pays'];

$sql=$updatedata->update($nom_ville,$pays,$id_ville);

echo "<script>alert('Mise a jour avec succés');</script>";

echo "<script>window.location.href='menu ville.php'</script>";
}
?>
<html>
<head>

<title>Mise à Jour Ville</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1 class ="text-center shadow p-3 mb-5 bg-white rounded" >Mettre à jour une ville</h1>
<p class="text-center" Style ="color:red"> Entrer l'ID de la ville à mettre à jour d'abord !</p>

<form  method="post" name="insert" action="" class="text-center shadow p-3 mb-5 bg-white rounded">
  
  <div class="form-group">
 
       <label> ID VILLE </label>
        <div>
          <input type="text" name="id_ville">
        </div>
		
		
        <label> NOM VILLE </label>
        <div>
          <input type="text" name="nom_ville">
        </div>
     
      
        <label > PAYS </label>
        <div>
          <input type="text" name="pays">
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
            <th>ID VILLE</th>
            <th>NOM VILLE</th>
            <th>PAYS</th>
        </tr>
    </thead>
    <tbody id="tb">
        <?php
		include_once("SRC/connexion.php");
        $result= $db->query("SELECT * FROM ville where 1 ");
        if($result->num_rows>0){
            while($val  =   $result->fetch_assoc()){  ?>
            <tr>
                <td align="center"><i class="fa fa-fw fa-arrows-alt"></i></td>
                <td><?php echo $val['id_ville']; ?></td>
                
                <td><?php echo $val['nom_ville']; ?></td>
                <td><?php echo $val['pays']; ?></td>
            </tr>
            <?php
            }
        }else{ ?>
        <tr>
            <td colspan="5" class="bg-light text-center"><strong>No Record(s) Found!</strong></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
