<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CFA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/connexion.css">
    

</head>
<body>
<div class="container-fluid">
    <h3 class="demarrer">Démarrer</h3>
    <img class="home" src="img/homelogo.png" width="100px">
    <h3 class="connect"> Connecter vous à votre espace</h3>

    <form action="verification.php" method="POST">
    <input  type="text" placeholder="Email" name="email" class="email" required>
    <input type="password" placeholder="Mot de passe" name="password" class="password" required>
    </form> 
    <div class="button__holder">
        <button class="plus"></button>
    </div>
</div>




</body>
</html>
