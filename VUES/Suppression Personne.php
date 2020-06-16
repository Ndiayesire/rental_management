<?php

include_once("SRC/personne.class.php");
if(isset($_POST['del']))
    {

$matricule=$_POST['matricule'];
$deletedata=new DB_con();
$sql=$deletedata->delete($matricule);
if($sql)
{

echo "<script>alert('Supprimé avec succés');</script>";
echo "<script>window.location.href='menu personne.php'</script>";
}
    }
?>


<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<title>Suppression Personne</title>

</head>
<body>


<h1 class ="text-center shadow p-3 mb-5 bg-white rounded" >Supprimer une Personne</h1>
<p class="text-center" Style ="color:red"> Entrer le Matricule de la personne à supprimer !</p>

<form  method="post" name="insert" action="" class="text-center shadow p-3 mb-5 bg-white rounded">
  
  <div class="form-group">
 
      
        <label> MATRICULE </label>
        <div>
          <input type="text" name="matricule">
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
			<th>MATRICULE</th>
            <th>NOM</th>
            <th>PRENOM</th>
			<th>TELEPHONE</th>
			<th>EMAIL</th>
			<th>ADRESSE</th>
			<th>DATE DE NAISSANCE</th>
        </tr>
    </thead>
    <tbody id="tb">
        <?php
		include_once("SRC/connexion.php");
        $result= $db->query("SELECT * FROM personne where 1 ");
        if($result->num_rows>0){
            while($val  =   $result->fetch_assoc()){  ?>
            <tr>
                <td align="center"><i class="fa fa-fw fa-arrows-alt"></i></td>
                <td><?php echo $val['matricule']; ?></td>
                <td><?php echo $val['nom']; ?></td>
                <td><?php echo $val['prenom']; ?></td>
                <td><?php echo $val['telephone']; ?></td>
				 <td><?php echo $val['email']; ?></td>
				  <td><?php echo $val['adresse']; ?></td>
				  <td><?php echo $val['date_de_naisance']; ?></td>
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
