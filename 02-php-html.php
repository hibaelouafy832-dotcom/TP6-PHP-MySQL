
<?php

$nom = "Hiba";
$age = 21;
$ville = "Marrakech";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon profil personnel</title>
</head>

<body>

    <h1>Mon profil</h1>

    <h2>Bienvenue sur ma page personnelle</h2>

    <p>
        Bonjour <?php echo $nom; ?>.
    </p>

    <p>
        Vous avez <?php echo $age; ?> ans.
    </p>

    <p>
        Vous habitez à <?php echo $ville; ?>.
    </p>

</body>
</html>
