<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="autocompletion">
    <meta name="author" content="gregory@autocompletion">
    <meta name="keywords" content="autocompletion, autocomplete, auto-greg">

    <title>autocompletion</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper background p font-poppins">
        <div class="wrapper">
            <div class="card card-4">
                <div class="card-body d-flex-inline justify-content-center">
                    <h2 class="title">Lancer la recherche</h2>
                    <form method="GET">
                        <div class="row">
                            <input type="text" name="search" id="search">
                            <span id="results"></span>
                        </div>
                        <div class="p-t-20">
                            <button class="btn" type="submit">Go</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/global.js"></script>
</body>

</html>