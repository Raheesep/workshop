<?php
include('includes/config.php');
if(isset($_POST['submit']))
{

$pid=$_POST['pid'];
$pname=$_POST['pname'];
$billno=$_POST['billno'];
$qty=$_POST['qnty'];
$damnt=$_POST['damnt'];
$samnt=$_POST['samnt'];

   if($pid)
        {
            $sql5 ="INSERT INTO purchase(pid,pname, billno, qnty, damnt, samnt) VALUES(:pid, :pname, :billno, :qnty, :damnt, :samnt)";
            $query5= $dbh -> prepare($sql5);
            $query5-> bindParam(':pid', $pid, PDO::PARAM_STR);
            $query5-> bindParam(':pname', $pname, PDO::PARAM_STR);
            $query5-> bindParam(':billno', $billno, PDO::PARAM_STR);
            $query5-> bindParam(':qnty', $qty, PDO::PARAM_STR);
            $query5-> bindParam(':damnt', $damnt, PDO::PARAM_STR);
            $query5-> bindParam(':samnt', $samnt, PDO::PARAM_STR);
            $query5->execute();
         }
          $sql2 = "SELECT qty from stoke where pid = :pid";
          $query2 = $dbh -> prepare($sql2);
          $query2-> bindParam(':pid', $pid, PDO::PARAM_STR);
          $query2->execute();
          list($qnty1) = $query2->fetch();

    if($qnty1)
    {

    $qnty=$qnty1+$qty;
    $sql1="UPDATE stoke SET qty=(:qty), samnt=(:samnt) WHERE pid=(:pid)";
    $query1= $dbh -> prepare($sql1);
    $query1-> bindParam(':qty', $qnty, PDO::PARAM_STR);
    $query1-> bindParam(':pid', $pid, PDO::PARAM_STR);
    $query1-> bindParam(':samnt', $samnt, PDO::PARAM_STR);
     if($query1->execute())
     {
        echo "<script type='text/javascript'>alert('updated Sucessfull!');</script>";
        
     }
    else 
     {
        $error="Something went wrong. Please try again";
     }
     }
     else
     {

    $sql ="INSERT INTO stoke(pid, pname, qty, damnt, samnt) VALUES(:pid,:pname,:qty,:damnt,:samnt)";
    $query= $dbh -> prepare($sql);

    $query-> bindParam(':pid', $pid, PDO::PARAM_STR);
    $query-> bindParam(':pname', $pname, PDO::PARAM_STR);
    $query-> bindParam(':qty', $qty, PDO::PARAM_STR);
    $query-> bindParam(':damnt', $damnt, PDO::PARAM_STR);
    $query-> bindParam(':samnt', $samnt, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();

    if($lastInsertId)
    {
    echo "<script type='text/javascript'>alert('added Sucessfull!');</script>";
    
    }
    else 
    {
        $error="Something went wrong. Please try again";
    }
   
   }
  

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

	
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
    

	
</head>

<body>

    <?php include('includes/header.php');?>
    <div class="ts-main-content">

<?php include('includes/leftbar.php');?>
	<div class="login-page bk-img">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12"><br><br>
						<h1 class="text-center text-bold mt-2x">Add Purshase</h1>
                        <div class="hr-dashed"></div>
						<div class="well row pt-2x pb-3x bk-light text-center">
                         <form method="post" class="form-horizontal" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
                            <div class="form-group">
                            
                            <div class="col-sm-6 col-sm-offset-3">
                            <label class="control-label">Product Id<span style="color:red">*</span></label>
                            <input type="text" name="pid" class="form-control" required>
                            </div>
                            </div>

                            <div class="form-group">
                            
                            <div class="col-sm-6 col-sm-offset-3">
                            <label class="control-label">Product Name<span style="color:red">*</span></label>
                            <input type="text" name="pname" class="form-control" required>
                            </div>
                            </div>

                            <div class="form-group">
                            
                            <div class="col-sm-6 col-sm-offset-3">
                            <label class="control-label">Bill No<span style="color:red">*</span></label>
                            <input type="text" name="billno" class="form-control" required>
                            </div>
                            </div>

                            <div class="form-group">
                            
                            <div class="col-sm-6 col-sm-offset-3">
                            <label class="control-label">Quantity<span style="color:red">*</span></label>
                            <input type="text" name="qnty" class="form-control" required>
                            </div>
                            </div>

                            <div class="form-group">
                            
                            <div class="col-sm-6 col-sm-offset-3">
                            <label class="control-label">D Amount<span style="color:red">*</span></label>
                            <input type="text" name="damnt" class="form-control" required>
                            </div>
                            </div>

                            <div class="form-group">
                            
                            <div class="col-sm-6 col-sm-offset-3">
                            <label class="control-label">Selling Amount<span style="color:red">*</span></label>
                            <input type="text" name="samnt" class="form-control" required>
                            </div>
                            </div>


                            

                             




                                <br>
                                <button class="btn btn-primary" name="submit" type="submit">Add</button>
                                </form>
                                
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

</body>
</html>