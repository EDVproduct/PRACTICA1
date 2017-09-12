<?php require_once('admin/lib/connectar.php'); ?>
<!DOCTYPE html>
<html lang="ca">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>exemple php 2017</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/lightbox.min.css">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        
        html,
        body,
        .view {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: rgba(0,0,0,0.5);
        }
        
        section{
            margin-top: 45px;
        }

        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        
        .top-nav-collapse {
            background-color: #1C2331;
        }
        
        footer.page-footer {
            background-color: #1C2331;
            margin-top: 45px;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #1C2331;
            }
        }
        /*Call to action*/
        
        .flex-center {
            color: #fff;
        }
        
        .view {
            background: url("media/fondo.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .carousel-inner > .carousel-item > img{
            width:100%;
            height:600px;
            }
    </style>

</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php">
            <?php 
                $stmt=$conn->prepare('SELECT logo,nom FROM dades_web');
                $stmt->execute();
                $rows = $stmt->fetch();
                if($rows['logo']!=""){
                    echo "<img src=\"admin/images/".$rows['logo']."\" height=\"25px;\">";
                }
                else{
                    echo "<span>".$rows['nom']."</span>";
                }
            ?>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?seccio=actualitat">actualitat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?seccio=entorn">entorn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?seccio=galeria">galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?seccio=tarifes">tarifes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contacta">contacta</a>
                    </li>
                </ul>
                <form class="form-inline waves-effect waves-light" action="" method="GET">
                    <input type="hidden" name="seccio" value="cercar">
                    
                    <input class="form-control" type="text" placeholder="Cercar a la web" name="paraules">

                    <button type="submit" name="enviar" class="btn-link" value="enviar"><i class="fa fa-search prefix" style="color: white;"></i></button>
                </form>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

    <?php
        if(isset($_GET['seccio'])){
            if(isset($_GET['sub'])){
                include_once("content/".$_GET['seccio']."_".$_GET['sub'].".php");
            }
            else{
                include_once("content/".$_GET['seccio'].".php");
            }
        }
        else{
            include_once("content/inicial.php");
        }
    ?>
    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3 offset-lg-1 hidden-lg-down">
                    <h5 class="title">ABOUT MATERIAL DESIGN</h5>
                    <p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>

                    <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS, and JS framework - Bootstrap.</p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-lg-2 col-md-4 offset-lg-1">
                    <h5 class="title">First column</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Second column</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="hidden-md-up">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Third column</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright: <a href="#">David Vallés</a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>

    <script type="text/javascript" src="js/gridify.js"></script>
    <script type="text/javascript">
        window.onload = function(){
            var options =
            {
                srcNode: 'img',             // grid items (class, node)
                margin: '20px',             // margin in pixel, default: 0px
                width: '250px',             // grid item width in pixel, default: 220px
                max_width: '',              // dynamic gird item width if specified, (pixel)
                resizable: true,            // re-layout if window resize
                transition: 'all 0.5s ease' // support transition for CSS3, default: all 0.5s ease
            }
            document.querySelector('.grid').gridify(options);
        }
    </script>
   
</body>

</html>