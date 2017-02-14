<?php 
$rand = rand(1,100);
$count = 0;
$num = 0;
if(isset($_POST['guess']) && strlen($_POST['try']) > 0) {
	$count = trim(htmlentities(($_POST['count']))) + 1;
	$num = $_POST['try'];
}
if(isset($_POST['theNumber'])) {
	$rand = $_POST['theNumber'];
}


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Guess the number</title>
</head>
<body>
	
	<form action="./index.php" method = "post">
	
		<input type="hidden" name = "theNumber" value = "<?php echo $rand; ?>" />
		<label for = "try" >GUESS THE NUMBER</label>
		<input type="number" name = "try" id ="try" value = "<?php echo $num; ?>"/>
		<input type="hidden" name = "count" value = "<?php echo $count; ?>"/>
		<input type="submit" value="GUESS" name ="guess" />
		
		<?php 
		
	
		if(isset($_POST['guess']) && strlen($_POST['try']) > 0){
			$try = trim(htmlentities($_POST['try']));
			if($try > $_POST['theNumber']) {
				echo "DOWN!"; 
			}
			
			if($try < $_POST['theNumber']) {
				echo "UP!";
	
			}
			if($try == $_POST['theNumber']) {
				echo "BRAVO POZNA CHISLOTO OT " . $count . " OPIT";
			}
		}
		?>
	</form>
</body>
</html>