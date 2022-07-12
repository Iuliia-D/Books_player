<?php
include 'header.php';
?>

      

<!-- Begin page content -->
<main class="flex-shrink-0" style="margin-bottom: 10rem;">
  <div class="container">

  <!-- <form class="d-flex" method="post" action="search.php?go"  id="searchform">
          <input class="form-control me-2" type="search" name="name" placeholder="Введите название книги или фамилию автора" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Поиск</button>
        </form> -->

    <div class="border-bottom">
    <h1 class="mt-5 ">Плеер для аудиокниг</h1>
    <p class="lead">Некоммерческий проект для прослушивания аудиокниг.</p>
</div>
    
    <h1 class="mt-5">Авторы</h1>
    <p class="lead">Выберите автора и нажмите "Слушать"</p>
    
  <div class="row">
      <!-- 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="card" style="width: 18rem;">
            <img src="content/img/pic_vilmont.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Екатерина Николаевна Вильмонт</h5>
                <p class="card-text"> — российская писательница, переводчица, романистка, автор детских детективов.</p>
                <a href="vilmont_playlist.php" class="btn btn-primary">Плейлист</a>

                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  Выбрать книгу
                </button>
                  </p>
                  <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="vilmont__a_ya_dura_pyataya.php">А я, дура, пятая!</a></li>
                        <li class="list-group-item"><a href="vilmont__artistka_blin.php">Артистка, блин!</a></li>
                        <li class="list-group-item"><a href="">Вафли по-шпионски</a></li>
                        <li class="list-group-item"><a href="">Гормон счастья и прочие глупости</a></li>
                        <li class="list-group-item"><a href="">Дама из сугроба 2</a></li>
                        <li class="list-group-item"><a href="">Дама из сугроба 1</a></li>
                        <li class="list-group-item"><a href="">Два зайца, три сосны</a></li>
                        <li class="list-group-item"><a href="">Девочка с перчиками</a></li>
                        <li class="list-group-item"><a href="">Девственная селедка</a></li>
                        <li class="list-group-item"><a href="">Интеллигент и две Риты</a></li>
                        <li class="list-group-item"><a href="">Курица в полете</a></li>
                        <li class="list-group-item"><a href="">Путешествие оптимистки</a></li>
                        <li class="list-group-item"><a href="">Свои погремушки</a></li>
                        <li class="list-group-item"><a href="">Со всей дури!</a></li>
                        <li class="list-group-item"><a href="">Сплошная лебедянь!</a></li>
                        <li class="list-group-item"><a href="">Трепетный трепач</a></li>
                        <li class="list-group-item"><a href="">У меня живет жирафа</a></li>
                        <li class="list-group-item"><a href="">Фиг ли нам, красивым дамам!</a></li>
                        <li class="list-group-item"><a href="">Шалый малый</a></li>
                        <li class="list-group-item"><a href="">Шпионы тоже лохи</a></li>
                    </ul>
                      
                      
                    </div>
                  </div>




            </div>
            </div>
        </div>

        <!-- 2 -->
        <div class="col-md-4 col-sm-6">
        <div class="card" style="width: 18rem;">
            <img src="content/img/pic_ustinova.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Татьяна Витальевна Устинова</h5>
                <p class="card-text"> — российская писательница-прозаик, автор детективных романов, сценаристка, переводчица и телеведущая.</p>
                <a href="ustinova_playlist.php" class="btn btn-primary">Плейлист</a>
                
            </div>
            </div>
        </div>

        <!-- 3 -->
        <div class="col-md-4 col-sm-6">
        <div class="card" style="width: 18rem;">
            <img src="content/img/simons.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Дэн Симмонс</h5>
                <p class="card-text"> — американский писатель-фантаст, педагог.</p>
                <a href="simmons_playlist.php" class="btn btn-primary">Плейлист</a>
            </div>
            </div>
        </div>

    </div>
    </main>


<?php
include 'footer.php';
?>
