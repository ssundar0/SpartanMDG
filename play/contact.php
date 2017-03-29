<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon" href="images/icon/icon.png">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:600" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script defer src="js/myJs.js"></script>
</head>
<body style="font-family: 'Lato', sans-serif; font-size:1.7em;">

<?php 
    
    include 'init.php';
    if($_SESSION['username']){
         include 'navs/lnav.php';      
}else{
         include 'navs/nav.php';
   }

   
?>

<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>



     <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" style="color:#16A085"><strong>IN ASSOCIATION WITH</strong></h4>
            </div>
            <div class="modal-body">
                <a href="http://www.prastuti-kiet.com" target="_BLANK"><img src="http://kiet.edu/p.png" class="img-responsive" style="padding:0 20px"></a>
            </div>
        </div>
    </div>
</div>



<div class="container" style="max-width:500px">
 <br>

	<div class="row">
	 <div class="col-md-6">
	  <div class="thumbnail">
	    <img src="images/contact/ap.jpg" class="img-responsive img-rounded img-circle">
		<div class="caption text-center">
		 <a href="https://fb.com/aishvary">Aishvary Pratap</a>
	    </div>
	  </div>
	 </div>
	 <div class="col-md-6">
	  <div class="thumbnail">
	    <img src="images/contact/uj.jpg" class="img-responsive img-rounded img-circle">
		<div class="caption text-center">
		 <a href="https://fb.com/jainutk">Utkarsh Jain</a>
	    </div>
	  </div>
	 </div>
</div>

	<div class="row">
	 <div class="col-md-6">
	  <div class="thumbnail">
	    <img src="images/contact/ss.jpg" class="img-responsive img-rounded img-circle">
		<div class="caption text-center">
		 <a href="https://fb.com/mayhsundar">Shyam Sundar</a>
	    </div>
	  </div>
	 </div>
	 <div class="col-md-6">
	  <div class="thumbnail">
	    <img src="images/contact/vb.jpg" class="img-responsive img-rounded img-circle">
		<div class="caption text-center">
		 <a href="https://www.facebook.com/profile.php?id=100002476965525">Vaibhav Singh</a>
	    </div>
	  </div>
	 </div>
</div>


</div>
	
</body>
</html>