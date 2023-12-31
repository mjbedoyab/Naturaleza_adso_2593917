<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lecturaleza</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/distCliente/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/distCliente/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/distCliente/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/distCliente/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/distCliente/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/distCliente/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/distCliente/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/distCliente/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- menu lateral -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="<?php echo base_url();?>/assets/distCliente/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            
        </div>
        <div class="humberger__menu__widget">
            
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> <?= explode(" ", $session['nombres'])[0]." ".explode(" ", $session['apellidos'])[0] ?></a>
            </div>
            <div class="header__top__right__auth">
                <a href="<?php echo base_url('index.php/Login/cerrarSession');?>" class="nav-link "> 
                    <i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>
                    <p class="text-danger">
                        cerrar sesion
                    </p>
                </a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="<?php echo base_url();?>/index.html">Inicio</a></li>
                <li><a href="./shop-grid.html">Tienda</a></li>
                <li><a href="./contact.html">Contacto</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i>byte a byte soft</li>
                
            </ul>
        </div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> ss@gmail.com</li>
                                <li>Envios gratis apartir 50.000</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i><?= explode(" ", $session['nombres'])[0]." ".explode(" ", $session['apellidos'])[0] ?> </a>
                                
          
                            </div>
                            <div class="header__top__right__auth">
                                <a href="<?php echo base_url('index.php/Login/cerrarSession');?>" class="nav-link "> 
                                    <i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>
                                    <p class="text-danger">
                                        cerrar sesion
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="<?php echo base_url();?>/assets/distCliente/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Inicio</a></li>
                            <li><a href="./shop-grid.html">Tienda</a></li>
                            
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">Producto: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->