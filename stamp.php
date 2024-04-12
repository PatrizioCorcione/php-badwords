<?php

$text = trim($_POST['text']);
$censored = trim($_POST['censored']);
$lenghtText = strlen($text);
$textCensored = str_replace($censored, '***', $text);
$lenghtCensoredText = strlen($textCensored);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parolaccia</title>
</head>

<body>
  <?php echo $text ?>
  <?php echo $lenghtText ?>
  <?php echo $textCensored ?>
  <?php echo $lenghtCensoredText ?>
</body>

</html>