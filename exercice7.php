<?php 
    $title = 'Exercice 7';
    include 'header.php';

    $lastname = 'Dupont';
    $firstname = 'Jack';
    $age = 34;
?>

<h1>Exercice 7</h1>

<p> <?php echo 'Bonjour'." ".$lastname." ".$firstname." ".',tu as'." ".$age." ".'ans.'; ?> </p>

<?php 
    include 'footer.php';
?>