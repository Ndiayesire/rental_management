<?php

include_once("SRC/avoir.class.php");

$updatedata=new DB_con();
if(isset($_POST['update']))
{

$matricule=$_POST['matricule'];
$id_role=$_POST['id_role'];


$sql=$updatedata->update($id_role,$matricule);

echo "<script>alert('Mise a jour avec succés');</script>";

echo "<script>window.location.href='menu avoir.php'</script>";
}
?>
<html>
<head>

<title>Mise à Jour Avoir</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1 class ="text-center shadow p-3 mb-5 bg-white rounded" >Mettre à jour un avoir</h1>
<p class="text-center" Style ="color:red"> Entrer le matricule de l'avoir à mettre à jour d'abord !</p>

<form  method="post" name="insert" action="" class="text-center shadow p-3 mb-5 bg-white rounded">
  
  <div class="form-group">
 
       <label> MATRICULE </label>
        <div>
          <input type="text" name="matricule">
        </div>
		
		
        <label> ID ROLE </label>
        <div>
          <input type="text" name="id_role">
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
            <th>MATRICULE</th>
            <th>ID ROLE</th>
            
        </tr>
    </thead>
    <tbody id="tb">
        <?php
		include_once("SRC/connexion.php");
        $result= $db->query("SELECT * FROM avoir where 1 ");
        if($result->num_rows>0){
            while($val  =   $result->fetch_assoc()){  ?>
            <tr>
                <td align="center"><i class="fa fa-fw fa-arrows-alt"></i></td>
                <td><?php echo $val['matricule']; ?></td>
                
                <td><?php echo $val['id_role']; ?></td>
                
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
