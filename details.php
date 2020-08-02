<?php
include('includes/config.php');
if(isset($_POST['submit']))
{

	      $frm=$_POST['from'];
          $to=$_POST['to'];


          $sql = "SELECT sum(damnt) from purchase WHERE dte BETWEEN :frm and :to";
          $query = $dbh -> prepare($sql);
          $query-> bindParam(':frm', $frm, PDO::PARAM_STR);
          $query-> bindParam(':to', $to, PDO::PARAM_STR);
          if($query->execute())
          {
          list($tot) = $query->fetch();

              $sql1 = "SELECT sum(amnt) from sales WHERE dte BETWEEN :frm and :to";
              	 $query1 = $dbh -> prepare($sql1);
              	 $query1-> bindParam(':frm', $frm, PDO::PARAM_STR);
         		 $query1-> bindParam(':to', $to, PDO::PARAM_STR);
         		if ($query1->execute())
         		{
         		 list($tot1) = $query1->fetch();
         		 $sql2 = "SELECT sum(pamnt) from employee WHERE dte BETWEEN :frm and :to";
              	 $query2 = $dbh -> prepare($sql2);
              	 $query2-> bindParam(':frm', $frm, PDO::PARAM_STR);
         		 $query2-> bindParam(':to', $to, PDO::PARAM_STR);
         		 $query2->execute();
         		 list($tot3) = $query2->fetch();
         		 $income=$tot1-($tot+$tot3);
         		  echo "<script type='text/javascript'>alert( 'emoployee total is $tot3');</script>";
         		  echo "<script type='text/javascript'>alert( 'Purchase total is $tot');</script>";
           
          		  echo "<script type='text/javascript'>alert( 'sales total is $tot1');</script>";
          		   echo "<script type='text/javascript'>alert( 'Income o period: $income');</script>";
           
         		}
         		 else 
       			 {
        			$error="Something went wrong. Please try again";
       			 }

            }

        else 
        {
        $error="Something went wrong. Please try again";
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
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Details</h2>

		<div class="login-page bk-img" style="background-image: url(img/background.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold mt-4x">Detailed Income</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form method="post">

									<label for="" class="text-uppercase text-sm"> FROM  </label>
									<input type="text" placeholder="YYYY-MM-DD" name="from" class="form-control mb" required>

									<label for="" class="text-uppercase text-sm"> TO </label>
									<input type="text" placeholder="YYYY-MM-DD" name="to" class="form-control mb" required>
									<button class="btn btn-primary btn-block" name="submit" type="submit">FIND</button>
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