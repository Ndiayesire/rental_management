<?php
include_once("SRC/role.class.php");
$insertdata=new DB_con();
if(isset($_POST['submit']))
{
$status_role=$_POST['status_role'];
$code_role=$_POST['code_role'];
$sql=$insertdata->insert($status_role,$code_role);
if($sql)
{
echo "<script>alert('Enrégistrer avec succés');</script>";
echo "<script>window.location.href='menu role.php'</script>";
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
<title>Ajout Role</title>

</head>
<body>

<h1 class ="text-center shadow p-3 mb-5 bg-white rounded" >Ajouter un role</h1>
<p class="text-center" Style ="color:red"> Entrer un role !</p>

<form  method="post" name="insert" action="" class="text-center shadow p-3 mb-5 bg-white rounded">
  
  <div class="form-group">
 
      
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
      
   
            <button type="submit" name="submit"  class="btn btn-primary">
              Ajouter
            </button>
		
     </div>
     
   
 
</form>
<table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
        <tr>
            <th width="20"></th>
            <th>ID ROLE</th>
            <th>STATUS ROLE</th>
            <th>CODE ROLE</th>
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
