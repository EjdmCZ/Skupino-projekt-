<!DOCTYPE html>
<html>
<head>
<title>Registrace</title>
<link rel="stylesheet" type="text/css" href="..\css\register.css">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="widht=device-widht, inital-scale=1.0">
</head>
<body>
	<nav>
		<ul>
			<li class="domu"><a href="index.html">Domů</a></li>
			<li><a href="help-reg.html">Pomoc</a></li>
		</ul>
	</nav>
	<center>
	<div class="form">
		<h1 id="Prvni_Nadpis">Registrace</h1>
		
		<form>
			
				<label>Uživatelské jméno:</label>
					<input type="text" name="user" placeholder="Zde napiš jméno" id="jmeno">
					<br>
				<label>Heslo:</label>
						<input type="Password" name="User_pass" placeholder="Zde napiš heslo" id="heslo">
						<br>
				<label>Potvrzení Hesla:</label>
						<input type="password" name="User_check" placeholder="Zde potvrdíš heslo" id="Potv-hesla">
						<br>
				<label>Email:</label>
						<input type="Email" name="mail" placeholder="Zde napiš svůj email" id="email">
						<br>
				<label>Telefoní číslo:</label>
				    	<br>
						<select>
							<option selected>+420</option>
							<option>+421</option>
							<option>+380</option>
							<option>+48</option>
							<option>+44</option>
							<option>+7</option>
							<option>+1</option>
						</select>
						<input type="Phone" name="mob_digits" placeholder="76*******" id="telefoníČíslo">
						<br>
						<input type="submit" name="submit" value="Potvrzení" id="Potvrzení">
						Už jsi člen?<a href="login.php">Přihlaš se</a>
		</form>
	</center>
</div>
</body>
</html>
