<?php include 'header.php';?>
    <!-- Start Banner Hero -->
   
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of The Month</h1>
                <p>
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="<?php echo img_loader('category_img_01','jpg'); ?>" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Watches</h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="<?php echo img_loader('category_img_02','jpg'); ?>" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Shoes</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="<?php echo img_loader('category_img_03','jpg'); ?>" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Accessories</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <div class="row">
            <?php for($i = 0;$i<3;$i++){ ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="<?php echo site_url('Welcome/acheter_un')."?id=".$produit[$i]['id']."&nom=".$produit[$i]['nom']."&prix=".$produit[$i]['prix']."&descri=".$produit[$i]['descri']."&photo=".$produit[$i]['photo']."&ext=".$produit[$i]['ext']; ?>">
                            <img src="<?php echo img_loader( $produit[$i]['photo'], $produit[$i]['ext']); ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                               
                                <li class="text-muted text-right"><?php echo $produit[$i]['prix']; ?></li>
                            </ul>
                            <a href="<?php echo site_url('Welcome/acheter_un')."?id=".$produit[$i]['id']."&nom=".$produit[$i]['nom']."&prix=".$produit[$i]['prix']."&descri=".$produit[$i]['descri']."&photo=".$produit[$i]['photo']."&ext=".$produit[$i]['ext']; ?>" class="h2 text-decoration-none text-dark"><?php echo $produit[$i]['nom']; ?></a>
                            <p class="card-text">
                            <?php echo $produit[$i]['descri']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
    <?php include 'footer.php';?>