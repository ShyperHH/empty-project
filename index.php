<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WEB</title>
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
    <?php
        $config = require_once 'database/migrations.php';
        include 'resources/views/inc/header.php';
        include 'resources/views/layouts/home.php';
        include 'resources/views/inc/footer.php';
    ?>
    <script type="text/javascript" src="public/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="public/js/main.js"></script>
</body>
</html>