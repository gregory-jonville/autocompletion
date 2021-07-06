<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="./js/script.js"></script>
  <link rel="stylesheet" href="./style/style.css">
  <title>Autocomplétion</title>
</head>
<body>

  <div class="col-lg-12">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">

      <form id="form" method="GET" action="">

        <h2>Recherchez un élément</h2>

        <br><br>

        <input type="search"  id="search" name="searchBox" class="form-control" autocomplete="off" placeholder="Cherchez un élément..." required>
        <ul></ul>

        <button type="submit" class="btn btn-primary">Rechercher</button>

      </form>
      <div class="success"></div>

    </div>
    <div class="col-lg-3"></div>
  </div>
</body>

</html>