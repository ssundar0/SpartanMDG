<?php 


include 'init.php'; 

if(!$_SESSION['username']){

   header('Location:login.php');
}


?>	

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Leaderboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon" href="images/icon/icon.png">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:600" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </head>
  
<body style="font-family: 'Lato', sans-serif; font-size:1.7em;background:url('images/badge.png') no-repeat center center fixed">

<!-- NAV-BAR -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="padding:10px;">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myBar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><style=font-family: "Comic Sans MS", "Comic Sans", cursive; font-size:1.7em">Spartan MDG</style></a>
		</div>		
		<div class="collapse navbar-collapse" id="myBar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="levels.php"><span class="glyphicon glyphicon-play"></span> Play</a></li>	
				<li><a href="leaderboard.php"><span class="glyphicon glyphicon-king"></span> Leaderboard</a></li>		
				<li><a href="http://fb.com/spartanmdg" target="_BLANK"><span class="glyphicon glyphicon-star"></span> Clues</a></li>
                                <li><a href="../instructions.php"><span class="glyphicon glyphicon-check"></span> Instructions</a></li>      
				<li><a href="../contact.php"><span class="glyphicon glyphicon-road"></span> ContactUs  </a></li>
                                <li><a href="SPARTAN_FAQ.pdf" target="_BLANK"><span class="glyphicon glyphicon-question-sign"></span> FAQs</a></li>       
				<li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</div>
</nav>


  
<div class="container" style="margin-top:100px;max-width:1000px">
  <h2 class="text-center">Leaderboard</h2>
<h3>Maintain your positions now. Only top 25 are being displayed. :) </h3><br>
                                                                                 
    <div class="table-responsive">          
  <table class="table">
    <thead style="background-color:#eee">
	
	
      <tr>
        <th>Rank</th>
        <th>Username</th>
        <th>Current Level</th>
        <th>Total attempts</th>
      </tr>
    </thead>
    <tbody>
	

	  <?php 
	              
             
            $result = mysqli_query($conn,"SELECT * FROM users ORDER by current_level DESC, time LIMIT 25");
	        $rank = 1;
            while($row = mysqli_fetch_array($result))	{		
			 
				  ?>
	  

	
      <tr>
        <td><?php echo $rank; ?></td>
        <td><?php echo $row['username'];?></td>
                <td><?php echo $row['current_level'];?></td>

        <td><?php echo $row['total_attempts']; ?></td>
			 
	  </tr>
			 <?php $rank++;}
			  
			  
			 
			 ?>
			 
	<!--	 
			 
	   <tr style="background-color:#16A085; color:white">
	    
        <p> Top 50 will be shown in leaderboard </p>		 
	  </tr>	 
			 
	-->		 
			 
    </tbody>
  </table>
  </div>
</div>

</body>
</html>

</body>
</head>	