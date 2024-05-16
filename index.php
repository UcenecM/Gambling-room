<!DOCTYPE html>
<html lang="sl">

<head>
    <title>Gambling room</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div id="naslov">
        <h1>DOBRODOŠLI V CASINO</h1>
    </div>
	<div class="glavni">
    	<div class="uporabniki">
			<form action="game.php" method="post">
				<div id="playerOne" class="player">
					<div class="playerTitle">IGRALEC 1:<br /></div>				
					<input id="player0" autocomplete="off" maxlength='11' type="text" class="playerInput" name="userOne" required placeholder="JAKA"></input>
				</div><br />
				<div id="playerTwo" class="player">
					<div class="playerTitle">IGRALEC 2:<br /></div>
					<input id="player1" autocomplete="off" maxlength='11' type="text" class="playerInput" name="userTwo" required placeholder="KETE"></input>
				</div><br />
				<div id="playerThree" class="player">
					<div class="playerTitle">IGRALEC 3:<br /></div>
					<input id="player2" autocomplete="off" maxlength='11' type="text" class="playerInput" name="userThree" required placeholder="MAVRI"></input>
				</div><br />
				
				<div id="parametri">
					<div id="roundsWrapper">
						<div id="roundsTitle"> Število metov: </div>
							<select name="rolls" id="rounds">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						
					</div><div id="diceWrapper">
						<div id="diceTitle"> Število kock: </div>
							<select name="dice" id="dice">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
					</div>
				</div>
				<input type="submit" value="ZAČNI"></input>
				
			</form>
		
    	</div>
		<br>
	
	</div>
	<br>
	
	
	<script src="script/input.js"></script>
</body>

</html>