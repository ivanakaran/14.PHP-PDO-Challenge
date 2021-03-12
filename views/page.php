<?php

require_once '../connection/connect.php';
require_once '../connection/create.php';

$sql = "SELECT * FROM page WHERE id={$_GET['id']}";

$stmt = $connect->query($sql);

while ($row = $stmt->fetch()) {

    $webpage[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome Link-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
  <!-- Bootstrap Links -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
  <!-- CSS Link -->
  <link rel="stylesheet" href="../assets/style.css?v=<?php echo time(); ?>">
  <title>Webpage</title>
</head>

<body>
  <?php foreach ($webpage as $page) {?>

  <nav class="navbar navbar-expand-lg nav-style">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#home">Дома<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#aboutUs">За нас</a>
        <a class="nav-item nav-link" href="#service_product"><?=$page['service_product']?></a>
        <a class="nav-item nav-link" href="#contact">Контакт</a>
      </div>
    </div>
  </nav>
  <?php }
;?>

  <?php foreach ($webpage as $page) {?>
  <div class="cover_photo" id='home'>
    <?php echo "<div style='
                background: url(\"$page[cover_photo]\");
                background-repeat: no-repeat;
                min-height: 70vh;
                background-size: cover;
                ;'
                </div>" ?>
    <h1 class="text-center cover_photo_h1"><?=$page['title']?></h1>
    <h3 class="text-center cover_photo_h3"><?=$page['subtitle']?></h3>
  </div>
  <?php }
;?>

  <?php foreach ($webpage as $page) {?>
  <div id="aboutUs">
    <div class="container">
      <h3 class="pt-3">За Нас</h3>
      <div class="row">
        <div class="col-md-8">
          <p><?=$page['about']?></p>
        </div>
        <div class="col-md-4 text-center">
          <p>Телефон</p>
          <p><?=$page['phone']?></p>
          <p>Локација</p>
          <p><?=$page['location']?></p>
        </div>
      </div>
    </div>
  </div>
  <?php }
;?>

  <?php foreach ($webpage as $page) {?>
  <div id="service_product">
    <div class="container">
      <h3 class="text-center"><?=$page['service_product']?></h3>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top img-responsive img-fluid" src="<?=$page['pic1']?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Опис на првиот продукт</h5>
            <p class="card-text"><?=$page['text1']?></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top img-responsive img-fluid" src="<?=$page['pic2']?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Опис на вториот продукт</h5>
            <p class="card-text"><?=$page['text2']?></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top img-responsive img-fluid" src="<?=$page['pic3']?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Опис на третиот продукт</h5>
            <p class="card-text"><?=$page['text3']?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php }
;?>

  <?php foreach ($webpage as $page) {?>
  <div id='contact' class="py-5">
    <div class="container">
      <h2 class="text-center py-5">Контакт</h2>
      <div class="row">
        <div class="col-md-6">
          <h4>Текст</h4>
          <p><?=$page['company_info']?></p>
        </div>
        <div class="col-md-6 border border-dark rounded webpage-form">
          <form class="">
            <div class="form-group">
              <label for="name"><b>Име</b></label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Вашето име">
            </div>
            <div class="form-group">
              <label for="email"><b>Емаил</b></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Вашиот емаил">
            </div>
            <div class="form-group">
              <label for="msg"><b>Порака</b></label> <br>
              <textarea class="form-control" name="msg" id="msg" cols="10" rows="5"
                placeholder="Вашата порака"></textarea>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary">Испрати</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php }
;?>

  <footer>
    <div class="container py-3">
      <div class="row">
        <div class="col-md-8">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, ex saepe odit praesentium laboriosam nisi
            laborum magni nam consectetur doloribus</p>
        </div>
        <div class="col-md-4">
          <?php foreach ($webpage as $page) {?>
          <div class="text-center icons">
            <a href="<?=$page['linkedin']?>>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="<?=$page['facebook']?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="<?=$page['twitter']?>" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="<?=$page['googleplus']?>" target="_blank"><i class="fab fa-google-plus-g"></i></a>
          </div>
        </div>
        <?php }
;?>
      </div>
    </div>
  </footer>
</body>

</html>