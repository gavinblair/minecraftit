<html>
<head>
<title>Minecraft It!</title>
<style>
<?php if(isset($_GET['i'])) { ?>
	body {
		margin: 0; padding: 0;
		background: #<?php echo isset($_GET['c']) ? $_GET['c'] : '000'; ?> url(<?php echo $_GET['i']; ?>) no-repeat center center;
		background-size: cover;
	}
	#hud {
		background: url(hud.png) no-repeat bottom right;
		height: 100%;
		width: 100%;
		position: relative;
	}
	#twitter, #reset {
		position: absolute;
		display: block;
		height: 70px;
		width: 70px;
		bottom: 0; 
		right: 550px;
	}
	#reset {
		height: 700px;
		right: 0;
		width: 1200px;
		bottom: 70px;
	}
<?php } ?>
</style>
</head>
<body>
<?php if(!isset($_GET['i'])) { ?>
	<form>
		<label for="i">Image URL:</label><br />
		<input id="i" name="i" value="creeper.jpg" /><br />
		<label for="c">Background Colour (HEX) :</label><br />
		<input id="c" name="c" value="FFF" /><br />
		<input type="submit" value="MINECRAFT IT!" />
	</form>
<?php } else { ?>
	<div id="hud">
		<a id='twitter' href='http://twitter.com/gavinblair'></a>
		<a id="reset" href="index.php"></a>
	</div>
<?php } ?>
</body>
</html>
