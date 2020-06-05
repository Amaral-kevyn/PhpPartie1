<?php 
    $title = 'Exercice 4';
    include 'header.php';

    $monNom = 'kevyn';
    $age = 27 ;
    $poids = 66.7;
    $Je_suis_jaune = true;
?>

<h1>Exercice 4</h1>

<p> <?php echo $monNom."/ ".$age."/ ".$poids."/ ".$Je_suis_jaune; ?> </p>

<?php 
    include 'footer.php';
?>