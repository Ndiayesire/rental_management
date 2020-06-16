
<?php

include_once("SRC/tbien.class.php");

$updatedata=new DB_con();
if(isset($_POST['update']))
{

$nom_bien=$_POST['nom_bien'];
$code_du_bien=$_POST['code_du_bien'];

$sql=$updatedata->update($nom_bien,$code_du_bien);

echo "<script>alert('Mise a jour avec succés');</script>";

echo "<script>window.location.href='Menu TypeBien.php'</script>";
}
?>
<html>
<head>

<title>Mise à Jour Type de biens</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1 class ="text-center shadow p-3 mb-5 bg-white rounded" >Mettre à jour une Role</h1>
<p class="text-center" Style ="color:red"> Entrer le code du bien pour le type de bien à mettre à jour d'abord !</p>

<form  method="post" name="insert" action="" class="text-center shadow p-3 mb-5 bg-white rounded">
  
  <div class="form-group">
 
       <label> NOM BIEN </label>
        <div>
          <input type="text" name="nom_bien">
        </div>
     
      
        <label > CODE DU BIEN</label>
        <div>
          <input type="text" name="code_du_bien">
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
