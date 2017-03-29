<!DOCTYPE html>
<html lang="en">
<head>
  <title>Instructions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:600" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <link rel="shortcut icon" href="images/icon/icon.png">

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

	<section class="container-fluid">
		<div class="rule">
		
			<h2 style="color:#16A085"><b><u>INSTRUCTIONS</u></b></h2>
			<ul>
				<li> Participation in MDG is open for all the individuals.</li>
				<li> Any attempts to cheat or malpractice would result in immediate disqualification of the HUNTER.</li>
                                <li> Strictly follow the above mentioned rule as we are maintaining answer attempt logs for all the levels.</li>
				<li> The format of the answer is all lowercase and without spaces. Special symbols are to be ignored. For example, if the answer to level 1 is Mystical & Dynamic Gambit(MDG), submit "mysticalanddynamicgambit".</li>
				<li> Clues may be hidden anywhere in the page such as in source code, image title, level name, image properties. You may also need to look for files in multiple directories.</li>
				<li> Additional clues for each level will be posted on our <a href="https://fb.com/spartanmdg">Facebook</a> page as per the need of the level and the schedule decided by the admins.</li>
                                <li> Google is your best friend for this hunt. Reverse Image Search is the most important tool.</li>
                                <li> During the run of MDG, trust your instincts rather than your friend. Happy Hunting :) </li>
			</ul>

		</div>
	</section>
</body>
</html>