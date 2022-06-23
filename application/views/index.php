<?php include 'header.php';?>
    <!-- Start Banner Hero -->
   
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categorie du mois</h1>
                <p>
                    Classement des produits de notre site
                </p>
            </div>
        </div>
        <div class="row">
        <?php for($i = 0;$i<count($categorie);$i++){ ?>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="<?php echo site_url('Welcome/acheter')."?id=".$categorie[$i]['id']; ?>"><img src="<?php echo img_loader($i,'jpg'); ?>" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3"><?php echo $categorie[$i]['nom']; ?></h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <?php } ?>
        </div>
    </section>
    <!-- End Categories of The Month -->
   
    <?php include 'footer.php';?>