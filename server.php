<?php

  $paragraph = $_GET['text'];

  $badWord = $_GET['badWord'];

  $paragraph_length = strlen($paragraph);

  $text_censored = str_replace($badWord, '***', $paragraph);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

  <title>PHP Badwords</title>
</head>
<body>
  <h1>PHP Badwords</h1>
  <div class="container">
    
    <p>  <?php echo $paragraph  ?> </p>
    <p>  <?php echo "the text length is $paragraph_length"  ?> </p>
    <h3> <?php echo $text_censored ?> </h3>
    <p>  <?php echo 'the text length is' . strlen($text_censored)  ?> </p>
    <h3>  </h3>
    
    
  </div>
</body>
</html>