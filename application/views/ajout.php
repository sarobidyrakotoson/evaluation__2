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

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>




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
                        <th>photo</th>
                        <th>ext</th>
                        <th>photo</th>
                    </tr>
                   
                    <?php for($i = 0;$i<count($produit);$i++){ ?>
                        <tr>
                        <td><?php echo $produit[$i]['nom']; ?></td>
                        <td><?php echo $produit[$i]['photo']; ?></td>
                        <td><?php echo $produit[$i]['ext']; ?></td>
                        <td><img src="<?php echo img_loader( $produit[$i]['photo'], $produit[$i]['ext']); ?>" style="width: 100px" alt="produit"></td>
                        </tr>
                        <?php } ?>
                    
                </table>
            </div>
        </div>
    </section>
    <!-- End Contact -->


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