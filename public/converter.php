<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="converter.css">
    <title>Project Converter</title>
</head>
<body>
    
<header>
    <div class=div1></div>
    <div class=info>
        <p id=titre>Projet Converter</p>
    </div>
    <div class=div2></div>
</header>
<div class=div4>
<p style="text-align:right">
<a href="deconnexion.php"><button class=""><i class="" ></i>Déconnexion</button></a>
	</p>
    </div>

<div class=div3>
    <div class="container" >
        <h2>CONVERTER PAGE</h2>
        <br><br>
    </div>
    <form class="container" action="" method="post">
    <p class=""><?php echo $_SESSION['msg_erreur'];?> </p>
				<br>
				<label>Valeur en °C</label>  <br>
				<input class="" type="int" name="degreCelcius" placeholder="Enter la valeur de la temperature en °C" value="" autofocus> <br>
				<br>
				
				<br>
				
                <br><br>
                
                <button type="submit" class="btn btn-default">Valider</button> <button type="submit" class="btn btn-default">Reset</button>
    </form>
</div>


</body>
</html>