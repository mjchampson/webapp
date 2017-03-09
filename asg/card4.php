<!DOCTYPE html>
<html>
<head>
	<title>4</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<center>
<script type="text/javascript">
	var tries = 0;
	function getans(){
		var guess = prompt("ANSWER: ", "NO # PLSSS!");
		guess = guess.toLowerCase();
		if (isNaN(guess)) {
			switch (guess){
				case ('bear'):
				case ('panda'):
				case ('pig'):
				case ('pug'):
					alert("You are normal!");
					window.location="result.php?card1=<?php echo $_GET['card1']?>&card2=<?php echo $_GET['card2']?>&card3=<?php echo $_GET['card3']?>&card4=correct";
					break;
				default:
					alert("You are addict!");
					window.location="result.php?card1=<?php echo $_GET['card1']?>&card2=<?php echo $_GET['card2']?>&card3=<?php echo $_GET['card3']?>&card4=wrong";
					break;
			}
		} else if (tries>=2){
			window.location="emergency.php";
		}
		else {
			tries++;
			getans();
		}
		
	}

</script>
<div>
	<img src="4.jpg">
</div>
<input type="button" class="button" value="What is that photo?" onclick="getans()">
</center>
</body>
</html>