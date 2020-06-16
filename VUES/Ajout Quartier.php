<?php
include_once("SRC/quartier.class.php");
$insertdata=new DB_con();
if(isset($_POST['submit']))
{
$nom_ville=$_POST['id_ville'];
$pays=$_POST['nom_quartier'];
$sql=$insertdata->insert($nom_ville,$pays);
if($sql)
{
echo "<script>alert('Enrégistrer avec succés');</script>";
echo "<script>window.location.href='menu quartier.php'</script>";
}
else
{
echo "<script>alert('Erreur');</script>";
}
}
 ?>


<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<title>Ajout Quartier</title>

</head>
<body>

<h1 class ="text-center shadow p-3 mb-5 bg-white rounded" >Ajouter un quartier</h1>
<p class="text-center" Style ="color:red"> Entrer des noms de Quartier correct !</p>

<form  method="post" name="insert" action="" class="text-center shadow p-3 mb-5 bg-white rounded">
  
  <div class="form-group">
 
      
        <label> ID VILLE </label>
        <div>
          <input type="text" name="id_ville">
        </div>
     
      
        <label > NOM QUARTIER </label>
        <div>
          <input type="text" name="nom_quartier">
        </div>
      <p>
	  </p>
      
   
            <button type="submit" name="submit"  class="btn btn-primary">
              Ajouter
            </button>
		
     </div>
     
   
 
</form>
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
            <td colspan="5" class="bg-light text-center"><strong>Pas d'enregisrement !</strong></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
