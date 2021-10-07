<html>
    <head>
        <title>Szczegóły notatki</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        <?php
            require_once("navbar.php");
            require_once("connection.php");
            if (isset($_GET['id'])) {
                echo 'My ID is = ' . $_GET['id'];
            }
        ?>
        </div>
    </body>
</html>