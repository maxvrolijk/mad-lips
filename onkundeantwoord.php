<html>
<head>
	<title>onkunde</title>
	<link rel="stylesheet" type="text/css" href="madlips.css">
</head>

	<body>
		<form method="get" action="onkunde.php">
			<div>	
				<h1>Mad Libs</h1>
				<ul>
					<li><a href="paniek.php">er heerst paniek...</a></li>
					<li><a href="onkunde.php">onkunde</a></li>
				</ul>

			<div class="jan">
			<h1>onkunde</h1>	

			<p>
				<label>Er zijn veel mensen die niet kunnen <?php echo $_POST["talent"] ?>. Neem nou <?php echo $_POST["persoon"] ?>.</label>
			</p>

			<p>
				<label>Zelfs met de hulp van een <?php echo $_POST["vakantie"] ?> of zelfs <?php echo $_POST["persoon"] ?> kan <?php echo $_POST["persoon"] ?> niet <?php echo $_POST["talent"] ?>.<label>
			</p>

			<p>
				<label>Dat heeft niet te maken met een gebrek aan <?php echo $_POST["eigenschap"] ?>, maar met een te veel aan <?php echo $_POST["seigenschap"] ?>.</label>
			</p>
			
			<p>
				<label>Te veel <?php echo $_POST["vakantie"] ?> leidt tot <?php echo $_POST["overkomen"] ?> en dat is niet goed als je wilt <?php echo $_POST["talent"] ?>.</label>
			</p>	
			<p>
				<label>Helaas voor <?php echo $_POST["persoon"] ?>.dan moet je het moet je het maar <?php echo $_POST["getal"] ?> dagen later doen.</label>
			</p>	
