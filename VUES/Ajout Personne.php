<?php
include_once("SRC/personne.class.php");
$insertdata=new DB_con();
if(isset($_POST['submit']))
{
$matricule=$_POST['matricule'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$adresse=$_POST['adresse'];
$date_de_naisance=$_POST['date_de_naisance'];

$sql=$insertdata->insert($matricule,$nom,$prenom,$telephone,$email,$adresse,$date_de_naisance);
if($sql)
{
echo "<script>alert('Enrégistrer avec succés');</script>";
echo "<script>window.Personne.href='menu personne.php'</script>";
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
<title>Ajout Personne</title>

</head>
<body>

<h1 class ="text-center shadow p-3 mb-5 bg-white rounded" >Ajouter une personne</h1>
<p class="text-center" Style ="color:red"> Entrer une Personne !</p>

<form  method="post" name="insert" action="" class="text-center shadow p-3 mb-5 bg-white rounded">
  
  <div class="form-group">
 
      
        <label> MATRICULE </label>
        <div>
          <input type="text" name="matricule">
        </div>
     
      
        <label > NOM </label>
        <div>
          <input type="text" name="nom">
        </div>
		
		
		<label > PRENOM </label>
        <div>
          <input type="text" name="prenom">
        </div>
		
		
		<label > EMAIL </label>
        <div>
          <input type="text" name="email">
        </div>
		
		<label > TELEPHONE </label>
        <div>
          <input type="text" name="telephone">
        </div>
		
		<label > ADRESSE </label>
        <div>
          <input type="text" name="adresse">
        </div>
		
		<label > DATE DE NAISSANCE  </label>
        <div>
          <input type="date" name="date_de_naisance">
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
