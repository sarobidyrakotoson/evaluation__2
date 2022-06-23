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

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        
                    </div>
                    <!-- panier -->
                    <a class="nav-icon position-relative text-decoration-none" href="<?php echo site_url('Welcome/panier'); ?>">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <!-- notification -->
                    <a class="nav-icon position-relative text-decoration-none" href="<?php echo site_url('Welcome/sign_out'); ?>">
                        <i class="fa fa-fw fa-sign-out-alt text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Ajout d’argent dans la porte-feuille virtuelle</h1>
                    <p>
                     Etat actuel de votre portefeuille : <?php echo $portef; ?>

                    </p>
                </div>
            </div>
            <form class="col-md-9 m-auto" method="post" action="<?php echo site_url('Welcome/recharger'); ?>" role="form">
            <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Montant</label>
                        <input type="number" class="form-control mt-1" id="name" name="nb" placeholder="montant">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Date de recharge</label>
                        <input type="datetime-local" class="form-control mt-1"  name="date" >
                    </div>
                </div>
                
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">VALIDER</button>
                    </div>
                </div>
            </form>
        
           
        </div>
    </section>
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Check out</h1>
            <p>
                Veuillez entrer les informations necessaires pour le livraison et le paiement
            </p>
        </div>
    </div>
    <!-- Start Contact -->

    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" action="<?php echo site_url('Welcome/achat'); ?>" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                    <label for="inputmessage">Addresse</label>
                    <textarea class="form-control mt-1" id="message" name="address" placeholder="addresse" rows="3" required></textarea>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                    <label for="inputsubject">Contact</label>
                    <textarea class="form-control mt-1" id="message" name="contact" placeholder="contact" rows="3" required></textarea>
                    </div>
                </div>
                <script>
                        var tab=JSON.parse(localStorage.getItem("pannier"));
                        console.log(tab);
                        var tab1 = JSON.stringify( tab );
                        document.cookie = "tab="+tab1;
                    </script>
                    <?php $a = json_decode( $_COOKIE['tab'], true );
                   //var_dump(count($a));
                   $somme = 0;
                   for($i=0;$i<count($a);$i++){
                       $somme += ($a[$i]['qte']*$a[$i]['pu']);
                   } ?>
                <div class="row">
                    <table>
                        <tr>
                            <th>Produit</th>
                            <th>Quantite</th>
                            <th>Prix(Ar)</th>
                        </tr>
                        <?php for($i=0;$i<count($a);$i++){ ?>
                        <tr>
                            <td> <?php echo $a[$i]['nomProduit']; ?></td>
                            <td> <input type="number" class="form-control mt-1" style="border-color: white;width: 80px" name="val<?php echo $i; ?>" value="<?php echo $a[$i]['qte']; ?>" id=""></td>
                            <td> <?php echo $a[$i]['pu']; ?></td>
                        </tr>
                        <?php } ?>
                        <hr>
                        <tr>
                            <td colspan="2">TOTAL(Ar)</td>
                            <td><?php echo $somme; ?></td>
                        </tr>
                </table>
               <h1> <?php if($portef<$somme) echo "Votre solde ne suffit pas,veuillez recharger!"; ?></h1>
                </div>
                <div class="row">
                <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3" name="submit" value="modifier">MODIFIER</button>
                    </div>
                    <div class="col text-end mt-2"></div>                    
                    <div class="col text-end mt-2"></div>                    
                    <div class="col text-end mt-2"></div>
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3" name="submit" value="valider">VALIDER</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->
    <?php include 'footer.php';?>