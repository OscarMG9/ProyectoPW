<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(RECURSOS_LOGIN_CSS."bootstrap_min.css")?>">
    <link rel="stylesheet" href="<?php echo base_url(RECURSOS_LOGIN_CSS."all.css")?>">
    <link rel="stylesheet" href="<?php echo base_url(RECURSOS_LOGIN_CSS."diseño.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url(RECURSOS_LOGIN_CSS."button.css") ?>">
    <link rel="shortcut icon" href="<?php echo base_url(DIR_IMG."musica.png")?>">
    <title><?= $nombre_pagina?></title>
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="<?php echo base_url(DIR_IMG."musica.png")?>" alt="">
        </div>
        <div class="text-center mt-4 name">
            Music Uptx
        </div>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <div class="text-center">
                <button class="mt-3 button">Login</button>
            </div>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div>
    </div>
    <script src="<?php echo base_url(RECURSOS_LOGIN_JS."bootstrap_bundle_min.js")?>"></script>
    <script src="<?php echo base_url(RECURSOS_LOGIN_JS."jquery_min.js")?>"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
</body>
</html>




