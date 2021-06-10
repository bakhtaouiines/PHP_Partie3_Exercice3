<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3.3</title>
</head>
<body>
    <h1>Exercice 3 Partie 3 : Les boucles PHP</h1>
    <ul>
        <?php
        $firstNumber = 100;
        $secondNumber = 48;
        while ($firstNumber >=10){
        ?>  
            <li>
            <?= ($firstNumber.'x' .$secondNumber. ' = ' .$firstNumber*$secondNumber);
            $firstNumber--;}?>
            </li>
    </ul>
</body>
</html>