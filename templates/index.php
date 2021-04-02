<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/style.css">
    <script src="../public/js/loader.js"></script>
    <script src="https://kit.fontawesome.com/2a17bef385.js" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

    <title>Benoit Bruneau Dev</title>
</head>

<body>
    <div class="loader-container">
        <div class="loader">
            Loading
            <span class="loader-span"></span>
        </div>
    </div>
    <?php
    /* Navigation */
    require_once('menu.php');
    require_once('pages/home.php');
    require_once('pages/about.php');
    require_once('pages/card.php');
    require_once('pages/contact.php');
    ?>
</body>

</html>