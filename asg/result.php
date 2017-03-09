<!DOCTYPE html>
<html>
<head>
	<title>Card Results</title>
</head>
<body>
<center>

	<?php
		$percentage=0;

		if($_GET['card1'] == 'correct')
			$percentage  = $percentage+25;
		if($_GET['card2'] == 'correct')
			$percentage = $percentage+25;
		if($_GET['card3'] == 'correct')
			$percentage = $percentage+25;
		if($_GET['card4'] == 'correct')
			$percentage = $percentage+25;
	?>
	<?php
		if($percentage==100){
	?>
		<h3>100% normal</h3>
	<?php		
		} else if($percentage==75){
	?>
		<h3>75% normal & 25% addict</h3>
	<?php		
		} else if($percentage==50){
	?>
		<h3>50% normal & 50% addict</h3>
	<?php		
		} else if($percentage==25){
	?>	
		<h3> 25% normal & 75% addict</h3>
	<?php
		} else {
	?>
		<h1> 100% addict, POLICE ARE COMING TO CATCH YOU!!</h1>
	<?php }
	?>
	<a href="card1.php">Play Again</a>
	</center>
</body>
</html>