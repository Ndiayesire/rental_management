<?php
include_once("SRC/louer.class.php");
$insertdata=new DB_con();
if(isset($_POST['submit']))
{
$matricule=$_POST['matricule'];
$date_debut=$_POST['date_debut'];
$date_fin=$_POST['date_fin'];
$montant_caution=$_POST['montant_caution'];
$prix=$_POST['prix'];
$sql=$insertdata->insert($matricule,$date_debut,$date_fin,$montant_caution,$prix);
if($sql)
{
echo "<script>alert('Enrégistrer avec succés');</script>";
echo "<script>window.location.href='Menu louer.php'</script>";
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
<title>Ajout Location</title>

</head>
<body>

<h1 class ="text-center shadow p-3 mb-5 bg-white rounded" >Ajouter une location</h1>
<p class="text-center" Style ="color:red"> Entrer une Location !</p>

<form  method="post" name="insert" action="" class="text-center shadow p-3 mb-5 bg-white rounded">
  
  <div class="form-group">
 
      
        <label> MATRICULE </label>
        <div>
          <input type="text" name="matricule">
        </div>
     
      
        <label > DATE DEBUT </label>
        <div>
          <input type="date" name="date_debut">
        </div>
		
		
		<label > DATE FIN </label>
        <div>
          <input type="date" name="date_fin">
        </div>
		
		
		<label > MONTANT CAUTION </label>
        <div>
          <input type="text" name="montant_caution">
        </div>
		
		<label > PRIX EN CFA </label>
        <div>
          <input type="text" name="prix">
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
