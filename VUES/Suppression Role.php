<?php

include_once("SRC/Role.class.php");
if(isset($_POST['del']))
    {

$id_role=$_POST['id_role'];
$deletedata=new DB_con();
$sql=$deletedata->delete($id_role);
if($sql)
{

echo "<script>alert('Supprimé avec succés');</script>";
echo "<script>window.location.href='menu role.php'</script>";
}
    }
?>


<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<title>Suppression Role</title>

</head>
<body>


<h1 class ="text-center shadow p-3 mb-5 bg-white rounded" >Supprimer une Role</h1>
<p class="text-center" Style ="color:red"> Entrer l'ID du Role à supprimer !</p>

<form  method="post" name="insert" action="" class="text-center shadow p-3 mb-5 bg-white rounded">
  
  <div class="form-group">
 
      
        <label> ID ROLE </label>
        <div>
          <input type="text" name="id_role">
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
            <th>ID ROLE</th>
            <th>STATUS ROLE</th>
            <th>CODE BIEN</th>
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
