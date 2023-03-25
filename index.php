<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Store</title>
    <link rel="shortcut icon" href="./img/logostore.png">
    <!-- Load font awesome icons -->
	<link rel="stylesheet" href="./assets/vendor/fontawesome/fontawesome-free-5.15.4-web/css/fontawesome.css">
    <link rel="stylesheet" href="./assets/vendor/fontawesome/fontawesome-free-5.15.4-web/css/brands.css">
    <link rel="stylesheet" href="./assets/vendor/fontawesome/fontawesome-free-5.15.4-web/css/solid.css">
    <!-- Jquery -->
    <script src="./assets/vendor/jquery/Jquery.min.js"></script>

    <!-- owl carousel libraries -->
    <link rel="stylesheet" href="./assets/vendor/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="./assets/vendor/owlcarousel/owl.theme.default.min.css">
	<script src="./assets/vendor/owlcarousel/owl.carousel.min.js"></script>

    <!-- Sweet Alert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <!-- Slider -->
    <link rel="stylesheet" href="./assets/vendor/ion.rangeSlider-master/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="./assets/vendor/ion.rangeSlider-master/css/ion.rangeSlider.min.css">
    <script src="./assets/vendor/ion.rangeSlider-master/js/ion.rangeSlider.min.js"></script>

    <!-- Font Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/topnav.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <!-- js -->


    <?php require_once "php/echoHTML.php"; ?>
</head>
<body>
    <?php  addTopNav() ?>

    <section>
        <?php
            addHeader();
        ?>
    </section>
</body>
</html>