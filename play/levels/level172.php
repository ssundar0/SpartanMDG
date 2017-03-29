<?php
session_start();
if(isset($_SESSION['username'])){
	
?>	

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Level 2</title>
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
<div class="container" style="max-width: 800px; margin-top:40px">

 <h2 class="text-center">Level-2</h2>

  <div class="row">
 <div class="text-center" id="worked" style="font-size:90px">
 00:00
     
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
	
	
 <script>
	$(document).ready(function (e) {
    var $worked = $("#worked");

    function update() {
        var myTime = $worked.html();
        var ss = myTime.split(":");
		if(ss[0] == '02'){
			alert('Work hard to maintain your LEAD.');
			ss[0] = '00';
		}
		
        var dt = new Date();
        dt.setHours(0);
        dt.setMinutes(ss[0]);
        dt.setSeconds(ss[1]);

        var dt2 = new Date(dt.valueOf() + 1000);
        var temp = dt2.toTimeString().split(" ");
        var ts = temp[0].split(":");

        $worked.html(ts[1]+":"+ts[2]);
        setTimeout(update, 1000);
    }

    setTimeout(update, 1000);
});

 </script>
</body>
</html>

<?php
}
else{
	
	echo "<script>alert('Please Log in first')</script>";
	echo "<script>location.href='../login.php'</script>";
}
?>