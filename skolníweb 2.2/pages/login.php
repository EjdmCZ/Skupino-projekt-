<!DOCTYPE html>
<html>
<head>
	<title>Ĺogin</title>
	<link rel="stylesheet" type="text/css" href="..\css\login.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="widht=device-widht, inital-scale=1.0">
</head>
<body>
	<nav>
		<ul>
			<li class="domu"><a href="index.html">Domů</a></li>
			<li><a href="help-log.html">Pomoc</a></li>
		</ul>
	</nav>
	<center>
			<div class="form">
		<h1 id="Prvni_nadpis">Přihlášení</h1>

		<form action="login.php" method="post" >

							<label>Uživatelskí Jméno:</label>
							<input type="text" name="user" placeholder="Napiš sem svoje Jméno" id="Jmeno">
						<br>
   							<label>Heslo:</label>
							<input type="password" name="user_pass" placeholder="Napiš svoje heslo" id="heslo">
						<br>
							<input type="submit" name="submit" value="Potvrzení" id="potvrzení">
					Nejsi Členem?<a href="register.html">Registruj se</a>
						<br>
	</center>
 </div>
</body>
</html>
