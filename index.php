<?php
    if(isset($_GET['controller'])&&isset($_GET['action']))
    {
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }else
    {
        $controller = 'pages';
        $action = 'home';
    }
?>
<html>
    <head></head>
        <body>
            <?php echo "controller =".$controller.",action = ".$action;?>
            <br>[<a href="?controller=pages&action=home">HOME</a>]
            [<a href="?controller=quataion&action=index">Quatation</a>]<br>
            [<a href="?controller=quataion&action=index">QuatationDetail</a>]<br>
            [<a href="?controller=quataion&action=index">productModel</a>]<br>
            <?php require_once("routes.php"); ?>
        </body>
    
</html>
    