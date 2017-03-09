<!DOCTYPE html>
<html>
<head>
	<title>1</title>
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
				case ('airplane'):
				case ('bird'):
				case ('flying cockroach'):
					alert("You are normal!");
					window.location="card2.php?card1=correct";
					break;
				default:
					alert("You are addict!");
					window.location="card2.php?card1=wrong";
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
	<img src="1.jpg">
</div>
<input type="button" class="button" value="What is that photo?" onclick="getans()">
</center>
</body>
</html>