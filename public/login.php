<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
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

<div class=div3>
    <div class="container" >
        <h2>LOGIN FORM</h2>
        <br><br>
    </div>
    <form class="container" action="" method="post">
    <p class=""><?php echo $_SESSION['msg_erreur'];?> </p>
				<br>
				<label>Identifiant</label>  <br>
				<input class="w3-input w3-text-blue" type="text" name="identifiant" placeholder="Enter votre identifiant" value="<?php echo $identifiant; ?>" autofocus> <br>
				<label>Mot de passe</label> <br>
				<input class="w3-input w3-text-blue" type="password" name="password" placeholder="Enter votre mot de passe" value="<?php echo $mdp; ?>" >
				<br>
				
                <br><br>
                
                <button type="submit" class="btn btn-default">Valider</button> <button type="submit" class="btn btn-default">Reset</button>
    </form>
</div>


</body>
</html>

