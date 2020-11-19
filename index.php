<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo5phpP3</title>
</head>
<body>
<p><?php
    // On crée notre array $Departemants
    $Departements = array (
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas de Calais',
        '80' => 'Somme');
        foreach($Departements as $element)
{
    echo $element . '<br />'; // affichera
}
?>

<?php
// $Departements['Aisne'] = '02';
// $Departements['Nord' ] = '59';
// $Departements['Oise'] = '60';
// $Departements['Pas de Calais'] = '62';
// $Departements['Somme'] = '80';

// foreach($Departements as $element)
// {
//     echo $element . '<br />';
// }

?>
</body>
</html>