<?php 
session_start();
//include_once 'app/models/index_models.php';
?>

<!doctype html>
  
  <html>
  <head>
    <meta charset="utf-8">
    <title>Blog Anasayfa</title>

   <link rel="stylesheet" type="text/css" href="/public/css/style.css">

  </head>

  <body>
   <div id="ust">
     <div id="header">
       <div id="logo">
        <h1><span class="logo_rengi"><?php echo $_SESSION['mail'];?></span></h1>
        <h2><?php echo "Merhaba";?></h2>

      </div> <!--logo kapanış--->

      <div id="menu" >
        <ul>
         <li class="activite"><a href="index.html">ANASAYFA</a></li>
         <li><a href="/konuekle">Konu EKle</a></li>
       </ul>





     </div>   <!--menu kapanış--->
   </div>     <!--header kapanış--->

 </div>         <!--ust kapanış---->

 <div id="content">

   <div id="icerik">
     <div id="icerik_1">
      <?php foreach ($data['icerik'] as $key => $value) {
        echo "<h2>".$value['konu']."</h2>"."<br>".$value['metin']."</br>";
      } ?>
    </div>

  </div>

</div>    <!--icerik kapanış-->
<div id="sidebar">
 <div class="gadget">
  <h2>Kategoriler</h2>
  <ul>
    <li><a href="#">HTML5</a></li>
    <li><a href="#">CSS3</a></li>
    <li><a href="#">PHP</a></li>
    <li><a href="#">Jquery</a></li>
  </ul>
</div>


<div class="gadget">
  <h2>Faydalı Linkler</h2>

  <ul>
    <li><a href="https://www.google.com"target="_blank">Google</a></li>
    <li><a href="https://www.youtube.com/channel/UCl9qD7jUhElGYUuKpt4MjOA"target="_blank">Youtube</a></li>
    <li><a href="http://www.bloggelistirme.blogspot.com"target="_blank">Blog Gelistirme</a></li>

  </ul>
</div>

<div class="gadget">
  <h2>Sosyal Linkler</h2>

  <ul>
    <li><a href="https://www.facebook.com"target="_blank">Facebook</a></li>
    <li><a href="http://www.twitter.com"target="_blank">Twitter</a></li>
    <li><a href="http://www.rss.com"target="_blank">Rss</a></li>
    <li><a href="http://www.linkedin.com"target="_blank">Linkedin</a></li>

  </ul>
  <form action="/indir" required="" method="POST" >
   <button type="submit" name="vindir">Verileri İndir</button><br></form>
 </div>

</div>     <!--sidebar kapanış--->

<div id="clear">
</div>




</div>        <!---content kapanış--->


</body>
</html>
