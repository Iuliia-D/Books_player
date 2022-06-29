<?php
include 'header.php';
?>



      

<!-- Begin page content -->
<main class="flex-shrink-0" style="margin-bottom: 10rem;">
  <div class="container">
    <h1>Екатерина Вильмонт</h1>
    <p>Выберите книгу. Для этого нажмите на значок в левой части окна проигрывателя.</p>

    <!-- player -->
    <div id="player"></div>
      <script>
        var player = new Playerjs({id:"player", file:"content/Vilmont/playlist.txt"});
        </script>

  </div>
    </main>

    
<?php
include 'footer.php';
?>
