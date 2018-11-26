<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 2</title>
  </head>
  <body>
    <p><a href="index.php?nom=Neveu&amp;prenom=Aymeric&amp;age=18">Dis-moi bonjour !</a></p>
    <?php
    if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age'])) // On a le nom et le prénom
{
    echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !' . $_GET['age'];
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner un nom et un prénom et un age!';
  }
  ?>
  </body>
</html>
