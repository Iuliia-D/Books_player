<?php
include 'header.php';
?>   

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">

  
  <h3>Татьяна Устинова</h3>
  <p>Плейлист</p>
  <p>Для выбора книги нажмите значок в левой части окна плеера</p>
  <div id="player"></div>

    <script>
      var player = new Playerjs({id:"player", file:"content/Ustinova/playlist.txt"});
    </script>
    </div>
    </main>



<?php
include 'footer.php';
?>
