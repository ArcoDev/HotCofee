<?php
    //conexion a la BD
    $con = mysqli_connect('localhost', 'root', '', 'mijo_brands');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotCoffee</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>style.css">
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <div class="box logo">
                <a href="index.html">
                    <h2>HotCoffee</h2>
                </a>
            </div>
            <div class="box search">
                <div class=" content-search">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/search.svg" alt="icon search" />
                    <input type="search" placeholder="search...">
                </div>
            </div>
            <div class="box items">
                <ul class="links">
                    <li><a href="<?php echo get_template_directory_uri(); ?>/index.html">home</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>/article.php">Articles</a></li>
                </ul>
            </div>
            <div class="box menu-mobile">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/hamburguer.svg" alt="icon menu mobile">
            </div>
        </nav>
        <div class="content-header">
            <div class="info-coffee">
                <h1>Make better <br> coffee <span><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/coffee.svg" alt="Coffee"></span></h1>
                <form action="">
                    <input class="email" type="email" placeholder="you@domain.com">
                    <input class="btn-email" type="submit" value="SUBSCRIBE">
                </form>
            </div>
            <div class="info-coffee img-people">
            </div>
        </div>
    </header>