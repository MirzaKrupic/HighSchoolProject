<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width">
	 <title>Registracija</title>
	 <link rel="stylesheet" type="text/css" href="./css/style.css">
	 <link rel="shortcut icon" href="./img/km10a.ico"/>
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">cener</span>.ba</h1>
			</div>
			<nav>
				<ul>
					<li><a href="index.html">pocetna</a></li>
					<li><a href="onama.html">o nama</a></li>
					<li class="current"><a href="reg.html">registracija</a></li>
					<li><a href="login.html">log in</a></li>
					<li><a href="">Kategorije</a>
						<ul>
						<li><a href="wd.html">Web dizajn</a></li>
						<li><a href="gd.html">Graficki dizajn</a></li>
						<li><a href="ve.html">Video edit</a></li>
						<li><a href="">Voiceover</a></li>
						</ul>	
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<form action="action_page.php" class="registracija">
  <div class="container">
    <h1>Registruj se</h1>
    <p>Molimo popunite formu kako bi ste se registrovali</p>
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Unesi username" name="username" value="<?php echo $username; ?>" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Unesi email" name="email" value="<?php echo $email; ?>" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Unesi password" name="password_1" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Ponovi password" name="password_2" required>
    <hr>

    <label for="tip"><b>Vi ste:</b></label><br>
    <input type="radio" name="tip" value="freelancer" checked> Freelancer<br>
 	<input type="radio" name="tip" value="kupac"> Kupac<br>
 	<hr>

    <p>Pritiskom na register prihvatate nase <a href="#">uslove koristenja</a>.</p>
    <button type="submit" class="dugme_2" name="reg_user">Register</button>
  </div>

  <div class="container signin">
    <p>vec imate nalog? <a href="#">log in</a>.</p>
  </div>
</form>
	<footer>
		<p>cener.ba, Copyright &copy; 2018</p>
	</footer>

</body>
</html>