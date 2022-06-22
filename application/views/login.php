<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - About Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo img_loader('apple-icon','png'); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo img_loader('favicon','ico'); ?>">

    <link rel="stylesheet" href="<?php echo css_loader('bootstrap.min'); ?>">
    <link rel="stylesheet" href="<?php echo css_loader('templatemo'); ?>">
    <link rel="stylesheet" href="<?php echo css_loader('custom'); ?>">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="<?php echo css_loader('fontawesome.min'); ?>">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="<?php echo site_url('Welcome/index'); ?>">
                Zay
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>
    <!-- Close Header -->


    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>CONNEXION</h1>
                            <form class="col-md-9 m-auto" method="post" action="<?php echo site_url('Welcome/se_connecter'); ?>" role="form">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputname">Email</label>
                                        <input type="email" class="form-control mt-1" id="name" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputemail">Mot de passe</label>
                                        <input type="password" class="form-control mt-1" id="mdp" name="mdp" placeholder="mot de passe" required>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <input type="submit" class="form-control mt-1" style="color: white;background-color: grey;border-color: grey"  value="SE CONNECTER">
                                    </div>
                                </div>
                            </form>
                        
                </div>
                
            </div>
        </div>
    </section>
    <!-- Close Banner -->


    
    <!-- Start Script -->
    <script src="<?php echo js_loader('jquery-1.11.0.min'); ?>"></script>
    <script src="<?php echo js_loader('jquery-migrate-1.2.1.min'); ?>"></script>
    <script src="<?php echo js_loader('bootstrap.bundle.min'); ?>"></script>
    <script src="<?php echo js_loader('templatemo'); ?>"></script>
    <script src="<?php echo js_loader('custom'); ?>"></script>
    <!-- End Script -->
</body>

</html>