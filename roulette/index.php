<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Roulette</title>
<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
	<div id="content">
		<div id="ballbox" style= "animation: spin 3s <?php $spins=rand(10,40); $spins /= 10; echo $spins;?> linear; animation-fill-mode: forwards;">
			<img id="ball" alt="ball" title="ball of roulette" width="20px" height="auto" src="assets/images/ball.png">
		</div>
	</div>
</body>
</html>