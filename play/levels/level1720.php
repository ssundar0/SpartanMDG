<?php
session_start();
if(isset($_SESSION['username'])){
	
?>	

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Level 20</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="shortcut icon" href="images/icon/icon.png">
  <link href="https://fonts.googleapis.com/css?family=Lato:600" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>

<body style="font-family: 'Lato', sans-serif; font-size:1.7em;">
	
	<?php include 'navs/lnav.php'; ?>
	<div class="container" style="max-width:600px; margin-top:20px ">
	  
     <h2 class="text-center">Level-<strong style="font-size:38px">20</strong></h2>       <br>

       <div class="row">
		<div class="col-sm-6">
			<img src="images/level20/flag.jpg" class="img-rounded img-responsive" style="width:240px;height:160px">
	     </div>
		<div class="col-sm-6">
			<img src="images/level20/label.png" class="img-rounded img-responsive" style="width:240px;height:160px">
		</div>
               	    </div>

                <div class="row">
		<div class="col-sm-6">
			<img src="images/level20/flags.png" class="img-rounded img-responsive" style="width:240px;height:160px">
	     </div>
		<div class="col-sm-6">
			<img src="images/level20/lapetiteprairieauxbouleaux.jpg" class="img-rounded img-responsive" style="width:240px;height:160px">
		</div>
                	    </div>	
	 
	 <br>
	 
	 
  <div class="row">

      <div class="nopadding col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

        <form action="../ans.php" method="post" accept-charset="utf-8" role="form">        

          <div class=" input-group input-group-lg">

            <input type="text" name="ans" style="border-radius: 0px;" value="" class="inputSubmit form-control" placeholder="Answer Here " required autofocus/>           

            <span class="input-group-btn">

              <input type="submit" class="btn btn-default" style="border-radius: 0px;" name="answer" value="Submit" />

            </span>

          </div>

        </form>       

      </div>
	</div>
</div>	
</body>
</html>

<?php
}
else{
	
	echo "<script>alert('Please Log in first')</script>";
	echo "<script>location.href='../login.php'</script>";
}
?>