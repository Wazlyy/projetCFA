<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CFA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/inscription.css">
    

</head>
<body>
<div class="container-fluid container3">
    <h3 class="newCompte">Nouveau Compte</h3>
    <img class="" src="img/piecejointe.png" width="100px">
    <h3 class="telechargement"> Télécharger une photo de profil</h3>

    <form action="verification.php" method="POST">
    
    <input  type="text" placeholder="Nom" name="nominsc" class="nominsc" required>
    <input  type="text" placeholder="Prénom" name="prenominsc" class="prenominsc" required>
    <input  type="text" placeholder="Email" name="emailinsc" class="emailinsc" required>
    <input type="password" placeholder="Mot de passe" name="passwordinsc" class="passwordinsc" required>
    </form> 
    
    <div class="button__holder">
        <button class="plus"></button>
    </div>
</div>




</body>
</html>
