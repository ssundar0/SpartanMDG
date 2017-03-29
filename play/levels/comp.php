<?php
session_start();
if(isset($_SESSION['username'])){
	
?>	

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Spartan MDG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:600" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>

<body style="font-family: 'Lato', sans-serif; font-size:1.7em;">
	
	<?php include 'navs/lnav.php'; ?>
<div class="container" style="max-width: 1200px;">


 
  <br>
  <!-- -->

  <div class="row">

      <div class="nopadding col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

       <h1 class="text-center">Thank You for your Hard Work and Patience during MDG's voyage.</h1><hr>
       <h3 class="text-center">User Logs will be analysed and final results will be updated soon.</h3>
<h3 class="text-center">Input your reviews on our facebook page if you liked MDG v2.0. </h5><hr>
<h2 class="text-center">Good Night and Best Wishes :)</h2>
<h2 class="text-center">-TEAM MDG</h1>

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