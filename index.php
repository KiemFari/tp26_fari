<?php
@$nom=$_POST["nom"];
@$prenom=$_POST["prenom"];
@$age=$_POST["age"];
@$valider=$_POST["valider"];
@$erreur="";
if (isset($valider)){
    if(empty($nom)) $erreur= "<li>Nom laissé vide!</li>";
    if(empty($prenom)) $erreur.= "<li>Prenom laissé vide!</li>";
    if(!is_numeric($age) or $age<12)$erreur.= "<li>age invalide!</li>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>INSCRIPTION</header>
    <section>
        <form nom="fo" action="">
        <div class="label">NOM</div>
        <div class="input">
            <input type="text" name="nom" value="<?php echo $nom?>" />
        </div>
        <div class="label">Prenom</div>
        <div class="input">
            <input type="text" name="prenom" value="<?php echo $prenom?>" />
        </div>
        <div class="label">Age</div>
        <div class="input">
            <input type="number" min="12" name="age" value="<?php echo $age?>" />
        </div>
        <div class="input">
            <input type="submit" name="valider" value="M'inscrire" />
        </div>


        </form>

   <?php if (!empty($erreur)) {  ?>
    <div id="erreur"><?php echo $erreur ?></div> 
    <?php } ?> 

    </section>
</body>
</html>