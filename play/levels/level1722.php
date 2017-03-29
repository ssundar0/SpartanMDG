<?php
session_start();
if(isset($_SESSION['username'])){
	
?>	

<!DOCTYPE html>
<html lang="en">
<head>
  <title>This username is not available!</title>
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
<div class="container" style="max-width: 600px; margin-top:40px">

 <h2 class="text-center">This username is not available!</h2>

  <div class="row">
 <div class="text-center">
      <img src="images/level22/thisusernameisnotavailable!.png"

      class="img-rounded col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 " style="border-style:solid; border-color:rgba(255,255,255,0.2); border-width:15px;padding:0;border-radius: 0px;">
 </div>

  </div>
  <br>

  <!-- -->

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