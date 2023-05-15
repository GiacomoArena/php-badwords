<?php



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

  <form action='server.php' method='GET'>
  <div class="form-label">

    <label for="text-area">text</label>
    <textarea class="form-control" for='text' placeholder="write your paragraph here"  name='text'id="text" style="height: 100px"></textarea>
  </div>

  <div class="mb-3">
    <label for="badwords" class="form-label">Bad word</label>
    <input type="text" for='badWord' name='badWord' class="form-control" id="bad_word"
    placeholder="write the word you want to censor">
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </div>
</body>
</html>