<?php

include_once("SRC/quartier.class.php");
if(isset($_POST['del']))
    {

$id_ville=$_POST['id_ville'];
$deletedata=new DB_con();
$sql=$deletedata->delete($id_ville);
if($sql)
{

echo "<script>alert('Supprimé avec succés');</script>";
echo "<script>window.location.href='menu quartier.php'</script>";
}
    }
?>


<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<title>Suppression Quartier</title>

</head>
<body>


<h1 class ="text-center shadow p-3 mb-5 bg-white rounded" >Supprimer un quartier</h1>
<p class="text-center" Style ="color:red"> Entrer l'ID de la ville pour le quartier à supprimer !</p>

<form  method="post" name="insert" action="" class="text-center shadow p-3 mb-5 bg-white rounded">
  
  <div class="form-group">
 
      
        <label> ID VILLE </label>
        <div>
          <input type="text" name="id_ville">
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
