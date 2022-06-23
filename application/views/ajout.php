<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - Contact</title>
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

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
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
                    <!-- notification -->
                    <a class="nav-icon position-relative text-decoration-none" href="<?php echo site_url('Welcome/sign_out'); ?>">
                        <i class="fa fa-fw fa-sign-out-alt text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                </div>
        </div>
    </nav>
    <!-- Close Header -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">C R U D</h1>
                <p>
                    
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <form action="<?php echo site_url('Welcome/recette'); ?>" method="post">
            <div class="mb-3">
                    <label for="inputmessage">Nouvelle recette</label>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Nom</label>
                    <input type="text" class="form-control mt-1" id="message" name="nom" placeholder="description" rows="5" required>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success"  value="AJOUTER" id="message" name="desc" placeholder="description" rows="5" required>
                </div>
            </div></form>
            <div class="col-12 col-md-4 p-5 mt-3">
            <form action="<?php echo site_url('Welcome/ingredient'); ?>" method="post">
            <div class="mb-3">
                    <label for="inputmessage">Recette</label>
                    <select  class="form-control mt-1" id="subject" name="recette" placeholder="Subject">
                   <?php for($i = 0;$i<count($recette);$i++){ ?>
                       <option value="<?php echo $recette[$i]['id']; ?>"><?php echo $recette[$i]['nom']; ?>  </option>
                       <?php } ?>
                   </select>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Ingredient</label>
                    <select  class="form-control mt-1" id="subject" name="prod" placeholder="Subject">
                   <?php for($i = 0;$i<count($produit);$i++){ ?>
                       <option value="<?php echo $produit[$i]['id']; ?>"><?php echo $produit[$i]['nom']; ?> <?php echo $produit[$i]['quantite']; ?> <?php echo $produit[$i]['unite']; ?></option>
                       <?php } ?>
                   </select>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Pourcentage</label>
                    <input type="number" class="form-control mt-1" id="message" name="prc" placeholder="Quantite" rows="5" required>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success"  value="AJOUTER" id="message" name="desc" placeholder="description" rows="5" required>
                </div>
                </form>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
            <form class="col-md-9 m-auto" method="post" action="<?php echo site_url('Welcome/stocker'); ?>" role="form" >
            <div class="mb-3">
                   <label for="inputsubject">Entrée de stock</label>
                  
               </div>
               <div class="mb-3">
                   <label for="inputsubject">Produit</label>
                   <select  class="form-control mt-1" id="subject" name="prod" placeholder="Subject">
                   <?php for($i = 0;$i<count($produit);$i++){ ?>
                       <option value="<?php echo $produit[$i]['id']; ?>"><?php echo $produit[$i]['nom']; ?></option>
                       <?php } ?>
                   </select>
               </div>
               <div class="mb-3">
                   <label for="inputsubject">Quantite</label>
                   <input type="number" class="form-control mt-1" id="subject" name="qte" placeholder="Quantite" required>
               </div>
               <div class="form-group col-md-6 mb-3">
                   <input type="submit" class="btn btn-success" value="ENTRER" id="name" name="name" placeholder="Name">
               </div>
           </form>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Recharge non valide </h1>
                </div>
            </div>
            <div class="row">
                <table style="width: 700px">
                    <tr>
                        <th>Montant</th>
                        <th>Date</th>
                        <th>Nom</th>
                        <th>Email</th><th></th>
                    </tr>
                   
                    <?php for($i = 0;$i<count($nonval);$i++){ ?>
                        <tr>
                        <td><?php echo $nonval[$i]['valeur']; ?></td>
                        <td><?php echo $nonval[$i]['date']; ?></td>
                        <td><?php echo $nonval[$i]['nom']; ?></td>
                        <td><?php echo $nonval[$i]['email']; ?></td>
                        <td><form action="<?php echo site_url('Welcome/valider'); ?>" method="post">
                        <input type="hidden" name="id" value="<?php echo $nonval[$i]['id']; ?>">
                         <button type="submit" class="form-control mt-1" style="background-color: #ccd9e6e"><i class="fa fa-fw fa-check text-dark mr-1"></i></button></td>
                         </form> </tr>
                        <?php } ?>
                    
                </table>
            </div>
        </div>
    </section> 

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" action="<?php echo site_url('Welcome/ajout'); ?>" role="form" enctype="multipart/form-data">
                <p style="color: red"><?php if(isset($error)){echo $error; } ?></p>
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Designation</label>
                        <input type="text" class="form-control mt-1" id="desi" name="desi" placeholder="designation" required>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Prix</label>
                        <input type="number" class="form-control mt-1" id="email" name="prix" placeholder="prix" required>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="inputsubject">Categorie</label>
                    <select  class="form-control mt-1" id="subject" name="cate" placeholder="Subject">
                    <?php for($i = 0;$i<count($categorie);$i++){ ?>
                        <option value="<?php echo $categorie[$i]['id']; ?>"><?php echo $categorie[$i]['nom']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Description</label>
                    <textarea class="form-control mt-1" id="message" name="desc" placeholder="description" rows="5" required></textarea>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Quantite</label>
                        <input type="number" class="form-control mt-1" id="desi" name="quantite" placeholder="quantite" required>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Unite</label>
                        <select  class="form-control mt-1" id="subject" name="unite" placeholder="Subject">
                    <?php for($i = 0;$i<count($unite);$i++){ ?>
                        <option value="<?php echo $unite[$i]['id']; ?>"><?php echo $unite[$i]['unite']; ?></option>
                        <?php } ?>
                    </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Photo</label>
                    <input type="file" class="form-control mt-1" id="subject" name="userfile" placeholder="Subject" required>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <input type="submit" class="btn btn-success btn-lg " value="AJOUTER" id="name" name="name" placeholder="Name">
                </div>
            </form>
        </div>
    </div>


    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Liste </h1>
                </div>
            </div>
            <div class="row">
                <table style="width: 700px">
                    <tr>
                        <th>designation</th>
                        <th>PRIX</th>
                        <th>Cate</th>
                        <th>photo</th>
                    </tr>
                   
                    <?php for($i = 0;$i<3;$i++){ ?>
                        <tr>
                        <td><?php echo $produit[$i]['nom']; ?></td>
                        <td><?php echo $produit[$i]['prix']; ?></td>
                        <td><?php echo $produit[$i]['id_cate']; ?></td>
                        <td><img src="<?php echo img_loader( $produit[$i]['photo'], $produit[$i]['ext']); ?>" style="width: 100px" alt="produit"></td>
                        </tr>
                        <?php } ?>
                    
                </table>
            </div>
        </div>
    </section>
  
    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                        <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                        <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2021 Company Name 
                            | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="<?php echo js_loader('jquery-1.11.0.min'); ?>"></script>
    <script src="<?php echo js_loader('jquery-migrate-1.2.1.min'); ?>"></script>
    <script src="<?php echo js_loader('bootstrap.bundle.min'); ?>"></script>
    <script src="<?php echo js_loader('templatemo'); ?>"></script>
    <script src="<?php echo js_loader('custom'); ?>"></script>
    <!-- End Script -->
</body>

</html>