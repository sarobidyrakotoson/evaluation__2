<?php include 'header.php';?>
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                <?php for($i = 0;$i<count($categorie);$i++){ ?>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        <?php echo $categorie[$i]['nom']; ?>
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                        <?php for($e = 0;$e<count($produit);$e++){
                            if($produit[$e]['id_cate']==$categorie[$i]['id']){ ?>
                            <li><a class="text-decoration-none" href="#"><?php echo $produit[$e]['nom']; ?></a></li>
                            <?php }} ?>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Men's</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Women's</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Featured</option>
                                <option>A to Z</option>
                                <option>Item</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php for($i = 0;$i<count($produit);$i++){ ?>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo img_loader( $produit[$i]['photo'], $produit[$i]['ext']); ?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white mt-2" href="<?php echo site_url('Welcome/acheter_un')."?id=".$produit[$i]['id']."&nom=".$produit[$i]['nom']."&prix=".$produit[$i]['prix']."&descri=".$produit[$i]['descri']."&photo=".$produit[$i]['photo']."&ext=".$produit[$i]['ext']; ?>"><i class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="fas fa-cart-plus"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="fas fa-shopping-cart"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.php" class="h3 text-decoration-none"><?php echo $produit[$i]['nom']; ?></a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    
                                </ul>
                               
                                <p class="text-center mb-0"><?php echo $produit[$i]['prix']; ?> Ar</p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->

  
    <?php include 'footer.php';?>