<?php
include 'header.php';
?>
   

<!-- Begin page content -->
<main class="flex-shrink-0" style="margin-bottom: 10rem;">
  <div class="container">
    <h1>Екатерина Вильмонт "Артистка, блин!"</h1>

    <!-- player -->
    <div id="player"></div>
      <script>
        var player = new Playerjs({id:"player", file:"content/Vilmont/Артистка, блин!.mp3"});
        </script>

  </div>
</main>

    
<?php
include 'footer.php';
?>
