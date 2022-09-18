<!doctype html>
<html>

<head>
     <meta charset="utf-8">
     <title>Blog</title>
     <link rel="stylesheet" type="text/css" href="/public/css/style.css">

</head>

<body>
     <div id="ust">
          <div id="header">

          </div>
          <!--header kapanış--->

     </div>
     <!--ust kapanış---->
     <form action="/kekle" required="" method="POST">
          <?php token::csrf(); ?>
          Konu: <input type="text" name="konu" required=""><br>
          Metin: <TEXTAREA name="metin" ROWS=5 COLS=20 required=""> </TEXTAREA><br>
          <button type="submit" name="kaydet">Kaydet</button><br>
          </div>
     </form>
</body>

</html>