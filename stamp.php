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
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous' />
  <title>Parolaccia</title>
</head>

<body class="bg-secondary ">
  <div class="container text-center my-5 ">
    <div class="my-5 bg-warning  rounded-5 p-3 fw-bold">
      <h3 class="fw-bold">TESTO NON CENSURATO</h3>
      <?php echo $text ?>
      <h5 class="fw-bold my-3 ">LUNGHEZZA TESTO NON CENSURATO: <?php echo $lenghtText ?></h5>
    </div>
    <div class="my-5 bg-danger rounded-5 p-3 fw-bold">
      <h3 class="fw-bold">TESTO CENSURTATO</h3>
      <?php echo $textCensored ?>
      <h5 class="fw-bold my-3 ">LUNGHEZZA TESTO CENSURATO: <?php echo $lenghtCensoredText ?></h5>
    </div>
  </div>


</body>

</html>