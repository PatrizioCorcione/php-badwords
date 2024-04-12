<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous' />
  <title>Parolaccia</title>
</head>

<body class="bg-danger">
  <div class=" my-5">
    <form class="container my-3 text-center" action="stamp.php" method="POST">
      <label for="disabledTextInput" class="form-label  fs-3  my-3 fw-bold ">INSERISCI UN TESTO</label>
      <textarea name="text" class="form-control" aria-label="With textarea"></textarea>
      <label for="disabledTextInput" class="form-label fs-3  my-3 fw-bold ">INSERISCI UNA PAROLA DA CENSURARE</label>
      <textarea name="censored" class="form-control" aria-label="With textarea"></textarea>
      <button class="btn btn-dark my-3 " type="submit">INVIA</button>
    </form>
  </div>
</body>

</html>