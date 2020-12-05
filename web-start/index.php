<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="cs">

<?
    include_once("head.php");
?>

<body>

<?
    include_once("menu.php");
?>

<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Můj první web</h1>
                    <hr class="small">
                    <span class="subheading">Moje Jméno</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h1>Moje Jméno</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h4>Pracovní zkušenosti</h4>
            <ul>
                <li>Firma: (počet let)</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h4>O mně</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet et ex in congue. Nunc ac massa quis orci blandit vehicula a et tortor. Aliquam ullamcorper dolor dolor, nec gravida erat mollis quis. Morbi quam nisi, mollis et rhoncus eleifend, blandit egestas diam. Morbi ac magna malesuada, ultrices sem ut, posuere quam. In hac habitasse platea dictumst. Curabitur ac quam id velit vulputate imperdiet. Vivamus bibendum nibh scelerisque, volutpat augue non, tempor enim. Donec pharetra, nisi nec condimentum efficitur, justo nisl hendrerit mi, at maximus ipsum dolor vel est. Mauris lorem nisl, cursus rhoncus metus id, commodo auctor elit. Vestibulum at ullamcorper dui. Fusce vitae velit vitae sapien convallis laoreet nec lobortis mauris. Vivamus eu gravida velit, sed ultrices lacus. Pellentesque ex nibh, rutrum sed congue eu, auctor non nunc. Donec ac pharetra enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>        </div>
    </div>
</div>

<hr>

<?
    include_once("footer.php");
?>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/clean-blog.min.js"></script>

</body>

</html>
