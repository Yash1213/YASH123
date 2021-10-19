<?php
session_start();
if(!isset($_SESSION['uid']))
{
header("location:index.php");
}
include("../inc/db.php");
?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <div class="container">
<div class="row">
<div class="col-md-12">
<?php
$id=$_GET['id'];
$sel="SELECT * FROM contact_table";
$rs=$con->query($sel);
while($row=$rs->fetch_assoc()){
	?>
	<div class="row">
	<div class="col-md-6">
	<p>name:<?php echo $row['databasecolumn'?></p>
	<p>email:<?php echo $row['databasecolumn2']?></p>
	<p>phone:<?php echo $row['databasecolumn3']?></p>
	<p>phone:<?php echo $row['databasecolumn4']?></p>
	</div>
	<div class="col-md-6">
	<p>name<?php echo $row['databasecolumn'?></p>
	<p>email<?php echo $row['databasecolumn2']?></p>
	<p>phone<?php echo $row['databasecolumn3']?></p>
	<p>phone1<?php echo $row['databasecolumn4']?></p>
	</div>
	
<?php }?>
	

</div>
</div>
 </div>
