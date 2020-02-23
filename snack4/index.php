<!-- /Utilizzare questo array: https://pastebin.com/CkX3680A.
    //Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
  $db = [
    'teachers' => [
      [
          'name' => 'Michele',
          'lastname' => 'Papagni'
      ],
      [
          'name' => 'Fabio',
          'lastname' => 'Forghieri'
      ]
    ],
    'pm' => [
      [
          'name' => 'Roberto',
          'lastname' => 'Marazzini'
      ],
      [
          'name' => 'Federico',
          'lastname' => 'Pellegrini'
      ]
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>snack 4</title>
  </head>
  <body>
    <?php
    foreach ($db as $key => $value) {
        echo "<div class=" . $key . ">";
      for ($i=0; $i < count($value); $i++) {
        echo "<p>";
        foreach ($value[$i] as $keyy) {
        echo $keyy . " ";
        }
        echo "</p>";
      }
      echo "</div>";
    }
    ?>
  </body>
</html>
