<?php
// pengulangan
// for
// while
// do while
// foreach : pengulangan khsus array

// for( $i = 0; $i < 10; $i++) {
//   echo "deden ahmad jamil <br>";
// }

// $i = 0;
// while($i < 5){
//   echo"heloo <br>";
//   $i++; 
// }

// $i = 0;
// do {
//   echo"<h1> helo <h1>";
//   $i++;
// }while($i < 2)
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .warna-baris {
      background-color: red;
    }
  </style>
</head>
<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <?php if ($i % 2 == 0) : ?>
          <tr class="warna-baris">
        <?php else : ?>
          <tr>
        <?php endif;?>
        <?php for ($j = 1; $j <= 9; $j++) : ?>
          <td><?= "$i,$j"; ?></td>
        <?php endfor; ?>
      </tr>
      <?php endfor; ?>
  </table>
</body>
</html>