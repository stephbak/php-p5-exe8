<?php
$calendar = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie5</title>
</head>
<body>
  <table>
    <?php for($numero = 0; $numero <= 11; $numero++){ ?>
      <td><?= $calendar[$numero] ?></td>
    <?php } ?>
  </table>
</body>
</html>
