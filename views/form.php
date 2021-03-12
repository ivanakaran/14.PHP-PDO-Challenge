<?php

require_once '../connection/connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap Links -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
  <!-- CSS Link -->
  <link rel="stylesheet" href="../assets/style.css?v=<?php echo time(); ?>">
  <title>Креирај веб страна</title>
</head>

<body>
  <div class="container-fluid create-background">
    <h3 class="text-center pt-3">Еден чекор ве дели до вашата веб страна</h3>
    <form action="../connection/create.php" method="post">

      <div class=" form-group row justify-content-center mt-4">
        <div class=" col-md-5">
          <label for="cover_photo">
            <b>Напишете го линкот до cover сликата:</b>
          </label>
          <input type="url" class="form-control" id="cover_photo" name="cover_photo" required>
        </div>
      </div>

      <div class=" form-group row justify-content-center mt-4">
        <div class=" col-md-5">
          <label for="title">
            <b>Внесете го насловот:</b>
          </label>
          <input type="text" class="form-control" id="title" name="title" required>
        </div>
      </div>

      <div class=" form-group row justify-content-center mt-4">
        <div class=" col-md-5">
          <label for="subtitle">
            <b>Внесете го поднасловот:</b>
          </label>
          <input type="text" class="form-control" id="subtitle" name="subtitle" required>
        </div>
      </div>

      <div class=" form-group row justify-content-center mt-4">
        <div class=" col-md-5">
          <label for="about">
            <b>Напишете нешто за вас:</b>
          </label>
          <textarea name="about" id="about" cols="20" rows="5" class="form-control" required></textarea>
        </div>
      </div>

      <div class=" form-group row justify-content-center mt-4">
        <div class=" col-md-5">
          <label for="phone">
            <b>Внесете го вашиот телефон:</b>
          </label>
          <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
      </div>

      <div class=" form-group row justify-content-center mt-4">
        <div class=" col-md-5">
          <label for="location">
            <b>Внесете ја вашата локација:</b>
          </label>
          <input type="text" class="form-control" id="location" name="location" required>
          <hr class="bg-white">
        </div>
      </div>

      <div class=" form-group row justify-content-center mt-4">
        <div class=" col-md-5">
          <label for="service_product">
            <b>Одберете дали нудите сервиси или продукти:</b>
          </label>
          <select name="service_product" id="service_product" class="custom-select">
            <option value="services">Сервиси</option>
            <option value="products">Продукти</option>
          </select>
        </div>
      </div>

      <div class=" form-group row justify-content-center mt-4">
        <div class=" col-md-5">
          <h6 class="font-weight-bold">Внесете URL од слика и опис на вашите продукти или сервиси</h6>
          <label for="pic1">
            <b>URL од слика:</b>
          </label>
          <input type="url" class="form-control" id="pic1" name="pic1" required>
          <label for="text1">
            <b>Опис за сликата:</b>
          </label>
          <textarea name="text1" id="text1" cols="20" rows="5" class="form-control" required></textarea>
        </div>
      </div>

      <div class=" form-group row justify-content-center mt-4">
        <div class=" col-md-5">
          <h6 class="font-weight-bold">Внесете URL од слика и опис на вашите продукти или сервиси</h6>
          <label for="pic2">
            <b>URL од слика:</b>
          </label>
          <input type="url" class="form-control" id="pic2" name="pic2" required>
          <label for="text2">
            <b>Опис за сликата:</b>
          </label>
          <textarea name="text2" id="text2" cols="20" rows="5" class="form-control" required></textarea>
        </div>
      </div>

      <div class=" form-group row justify-content-center mt-4">
        <div class=" col-md-5">
          <h6 class="font-weight-bold">Внесете URL од слика и опис на вашите продукти или сервиси</h6>
          <label for="pic3">
            <b>URL од слика:</b>
          </label>
          <input type="url" class="form-control" id="pic3" name="pic3" required>
          <label for="text3">
            <b>Опис за сликата:</b>
          </label>
          <textarea name="text3" id="text3" cols="20" rows="5" class="form-control" required></textarea>
          <hr class="bg-white">
        </div>
      </div>

      <div class=" form-group row justify-content-center mt-4">
        <div class=" col-md-5">
          <label for="company_info">
            <b>Напишете нешто за вашата компанија што луѓето треба да го знаат пред да ве контактираат:</b>
          </label>
          <textarea name="company_info" id="company_info" cols="20" rows="5" class="form-control" required></textarea>
          <hr class="bg-white">
        </div>
      </div>

      <div class=" form-group row justify-content-center mt-4">
        <div class=" col-md-5">
          <label for="linkedin">
            <b>LinkedIn</b>
          </label>
          <input type="text" class="form-control" id="linkedin" name="linkedin" required>
        </div>
      </div>

      <div class=" form-group row justify-content-center mt-4">
        <div class=" col-md-5">
          <label for="facebook">
            <b>Facebook</b>
          </label>
          <input type="text" class="form-control" id="facebook" name="facebook" required>
        </div>
      </div>

      <div class=" form-group row justify-content-center mt-4">
        <div class=" col-md-5">
          <label for="twitter">
            <b>Twitter</b>
          </label>
          <input type="text" class="form-control" id="twitter" name="twitter" required>
        </div>
      </div>

      <div class=" form-group row justify-content-center mt-4">
        <div class=" col-md-5">
          <label for="googleplus">
            <b>Google+</b>
          </label>
          <input type="text" class="form-control" id="googleplus" name="googleplus" required>
          <hr class="bg-white">

        </div>
      </div>
      <div class=" form-group row justify-content-center mt-4">
        <button type="submit" class="btn btn-primary mb-5">Потврди</button>
      </div>
  </div>
  </form>
  </div>

  <script src="http://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/i18n/defaults-*.min.js"></script>
  </script>
</body>

</html>