<?php
include 'init.php';

if(isset($_SESSION['username'])){
	if($_POST['answer']){
		
		//----------getting level no.--------
                
        $un = $_SESSION['username'];
		$lvl = mysqli_query($conn,"SELECT * FROM users where username = '$un'");
		$lvla = mysqli_fetch_array($lvl);
		
		$lvl_no = $lvla['current_level'];
		$attempts = $lvla['attempts'];
        $tattempts = $lvla['total_attempts']; 
		
		//------taking name----
		$lastanswer = $lvla['name'];
		$lastanswer = strtolower($lastanswer);
                $lastanswer = str_replace(' ', '', $lastanswer);

                 
		
		
		
	
        //-------------getting answer--------------
	
		$lans = mysqli_query($conn,"SELECT * FROM levels where level_no = '$lvl_no'");
		$data = mysqli_fetch_array($lans);
		$answer = $data['answer'];
		
		//----getting answer from user----
		$ans1 = $_POST['ans'];
	    
		if($lvl_no == 25){
			echo "<script>alert($lastanswer)</script>";
			if($ans1 == $lastanswer){
				
				$time = time();
		
		        $lvl_no ++;
		        $attempts = $attempts + 1;
		        $tattempts = $tattempts + 1;
		        $clvl = $lvl_no -1;
				$sql = mysqli_query($conn,"UPDATE users SET lattempts = CONCAT(lattempts, '__$clvl = $attempts'), attempts = '0', total_attempts = '$tattempts', current_level = '$lvl_no', time = '$time' , logs = CONCAT(logs, '--$lvl_no=> $ans1') WHERE username = '$un'");
                echo "<script>location.href='levels.php'</script>";
				
			}
			else{
				$attempts = $attempts + 1;
			    $tattempts = $tattempts +1;
			    $sql = mysqli_query($conn,"UPDATE users SET attempts = '$attempts', total_attempts = '$tattempts', logs = CONCAT(logs, '--$lvl_no=> $ans1') WHERE username = '$un'");
			    echo "<script>alert('Wrong Answer. Try Again :) ')</script>";
			    echo "<script>location.href='levels.php'</script>";
				
			}
			
		}else if($ans1 == $answer){
		
		
		$time = time();
		if(lvl_no <=6){
		$lvl_no ++;
		$attempts = $attempts + 1;
		$tattempts = $tattempts + 1;
		$clvl = $lvl_no -1;
		
		//-----playing with attempts----
		$sql = mysqli_query($conn,"UPDATE users SET lattempts = CONCAT(lattempts, '__$clvl = $attempts'), attempts = '0', total_attempts = '$tattempts', current_level = '$lvl_no', time = '$time' , logs = CONCAT(logs, '--$lvl_no=> $ans1') WHERE username = '$un'");
                echo "<script>location.href='levels.php'</script>";
				
		}
		}else{
			$attempts = $attempts + 1;
			$tattempts = $tattempts +1;
			$sql = mysqli_query($conn,"UPDATE users SET attempts = '$attempts', total_attempts = '$tattempts', logs = CONCAT(logs, '--$lvl_no=> $ans1') WHERE username = '$un'");
			echo "<script>alert('Wrong Answer. Try Again :) ')</script>";
			echo "<script>location.href='levels.php'</script>";
			}
		
	
	
	
	}else{
		header('location:levels.php');
	}

}
else{
	header('location:login.php');
}

?>