<?php
  function salam($sekolah ="stempert", $nama ="risma"){
    return "halo nama saya $nama saya sekolah di $sekolah";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>function</title>
</head>
<body>
  <h1><?php echo salam() ?></h1>
</body>
</html>