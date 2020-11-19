<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 2</title>
</head>
<body>
    
<?php
    $age = 100 ;
    $gender = 'Femme' ;

    if (($age >= 18) && ($age <= 120) && ($gender == 'Homme')){
        echo 'Vous êtes un homme et vous êtes majeur' ;
    }
    if (($age >= 18) && ($age <= 120) && ($gender == 'Femme')){
        echo 'Vous êtes une femme et vous êtes majeur' ;
    }
    if (($age < 18) && ($age >= 0) && ($gender == 'Homme')){
        echo 'Vous êtes un homme et vous êtes mineur' ;
    }
    if (($age < 18) && ($age >= 0) && ($gender == 'Femme')){
        echo 'Vous êtes une femme et vous êtes mineur' ;
    }
?>

</body>
</html>