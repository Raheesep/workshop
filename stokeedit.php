<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

if(isset($_GET['edit']))
	{
		$editid=$_GET['edit'];
	}


	
if(isset($_POST['submit']))
  {
	


	$no=$_POST['no'];
	$qty2=$_POST['qty'];
	$qty1=$_POST['qty1'];
    $damnt=$_POST['damntn'];
    $samnt=$_POST['samntn'];

    $qty=$qty1+$qty2;


  
    
$sql1 = "UPDATE stoke SET qty=(:qty), damnt=(:damnt), samnt=(:samnt) WHERE no=(:no)";
$query= $dbh -> prepare($sql1);
$query-> bindParam(':qty', $qty, PDO::PARAM_STR);
$query-> bindParam(':damnt', $damnt, PDO::PARAM_STR);
$query-> bindParam(':samnt', $samnt, PDO::PARAM_STR);
$query-> bindParam(':no', $no, PDO::PARAM_STR);
$query->execute();
	$msg="Information Updated Successfully";
}    
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Edit Stoke Details</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

	<script type= "text/javascript" src="../vendor/countries.js"></script>
	<style>
.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
	background: #dd3d36;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
	background: #5cb85c;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
</head>

<body>
<?php
		$sql = "SELECT * from stoke where no = :editid";
		$query = $dbh -> prepare($sql);
		$query->bindParam(':editid',$editid,PDO::PARAM_INT);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	
?>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h3 class="page-title">Edit Vehicle : <?php echo htmlentities($result->no); ?></h3>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Edit Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data" name="imgform">
							<div class="form-group">
                            
                            <div class="col-sm-6 col-sm-offset-3">
                            	<label class="control-label">Id<span style="color:red">*</span></label>
                            <input type="text" name="no" readonly="" class="form-control" value="<?php echo htmlentities($result->no);?>">
                            </div>
                            </div>

                             <div class="form-group">
                            
                            <div class="col-sm-6 col-sm-offset-3">
                            <label class="control-label">Quantity<span style="color:red">*</span></label>
                            <input type="text" name="qty" class="form-control" required value="0">
                            </div>
                            </div>


                            <div class="form-group">
                            
                            <div class="col-sm-6 col-sm-offset-3">
                            	<label class="control-label">D Amount<span style="color:red">*</span></label>
                            <input type="text" name="damntn" class="form-control" required value="<?php echo htmlentities($result->damnt);?>">
                            </div>
							</div>

							<div class="form-group">
                           
                            <div class="col-sm-6 col-sm-offset-3">
                            	 <label class="control-label">Selling Amount<span style="color:red">*</span></label>
                            <input type="text" name="samntn" class="form-control" required value="<?php echo htmlentities($result->samnt);?>">
                            </div>
							</div>

							<div class="form-group">
							<div class="col-sm-8 col-sm-offset-2">
							<input type="hidden" name="qty1" value="<?php echo htmlentities($result->qty);?>" >
							
		
					</div>
					</div>





<div class="form-group">
	<div class="col-sm-8 col-sm-offset-2">
		<button class="btn btn-primary" name="submit" type="submit">Save Changes</button>
	</div>
</div>

</form>
									</div>
								</div>
							</div>
						</div>
						
					

					</div>
				</div>
				
			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
				 $(document).ready(function () {          
					setTimeout(function() {
						$('.succWrap').slideUp("slow");
					}, 3000);
					});
	</script>

</body>
</html>
<?php } ?>