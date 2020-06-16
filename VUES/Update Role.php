<?php

include_once("SRC/Role.class.php");

$updatedata=new DB_con();
if(isset($_POST['update']))
{

$id_role=$_POST['id_role'];
$status_role=$_POST['status_role'];
$code_role=$_POST['code_role'];

$sql=$updatedata->update($status_role,$code_role,$id_role);

echo "<script>alert('Mise a jour avec succés');</script>";

echo "<script>window.location.href='menu role.php'</script>";
}
?>
<html>
<head>

<title>Mise à Jour Role</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1 class ="text-center shadow p-3 mb-5 bg-white rounded" >Mettre à jour une Role</h1>
<p class="text-center" Style ="color:red"> Entrer l'ID du role à mettre à jour d'abord !</p>

<form  method="post" name="insert" action="" class="text-center shadow p-3 mb-5 bg-white rounded">
  
  <div class="form-group">
 
       <label> ID ROLE </label>
        <div>
          <input type="text" name="id_role">
        </div>
		
		
        <label> STATUS ROLE </label>
        <div>
          <input type="text" name="status_role">
        </div>
     
      
        <label > CODE ROLE </label>
        <div>
          <input type="text" name="code_role">
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
            <th>ID Role</th>
            <th>NOM Role</th>
            <th>PAYS</th>
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
            <td colspan="5" class="bg-light text-center"><strong>No Record(s) Found!</strong></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
