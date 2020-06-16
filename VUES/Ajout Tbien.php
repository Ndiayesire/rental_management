<?php
include_once("SRC/Tbien.class.php");
$insertdata=new DB_con();
if(isset($_POST['submit']))
{
$nom_bien=$_POST['nom_bien'];
$code_du_bien=$_POST['code_du_bien'];
$sql=$insertdata->insert($nom_bien,$code_du_bien);
if($sql)
{
echo "<script>alert('Enrégistrer avec succés');</script>";
echo "<script>window.location.href='Menu TypeBien.php'</script>";
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
<title>Ajout Type de Biens</title>

</head>
<body>

<h1 class ="text-center shadow p-3 mb-5 bg-white rounded" >Ajouter un Type de biens</h1>
<p class="text-center" Style ="color:red"> Entrer un Type de bien !</p>

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
      
   
            <button type="submit" name="submit"  class="btn btn-primary">
              Ajouter
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
