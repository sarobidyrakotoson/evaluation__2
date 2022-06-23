<link rel="stylesheet" type="text/css" href="<?php echo css_loader('slick.min'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo css_loader('slick-theme'); ?>">
<?php include 'header.php';?>
    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="<?php echo img_loader($photo,$ext); ?>" alt="Card image cap" id="product-detail">
                    </div>
                   
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><?php echo $nom; ?></p></h1>
                            <p class="h3 py-2"><?php echo $prix; ?> Ar</p>
                            
                            

                            <h6>Description:</h6>
                            <p><?php echo $descri; ?></p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Stock:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>4</strong></p>
                                </li>
                            </ul>
                            <form action="<?php echo site_url('Welcome/acheter_ceci'); ?>" method="post">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="product-quanity" id="<?php echo $id; ?>" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Acheter</button>
                                    </div>
                            </form>
                                    <div class="col d-grid">
                                     <a  class="btn btn-success btn-lg" href="javascript:insertPanier(<?php echo $id; ?>,'<?php echo $nom; ?>',<?php echo $prix; ?>,'<?php echo $photo.'.'.$ext; ?>')">
                                       Ajouter au panier</a>
                                    </div>
                                </div>
                           

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Related Products</h4>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">
            <?php for($i = 0;$i<count($produit);$i++){ ?>
                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?php echo img_loader($produit[$i]['photo'], $produit[$i]['ext']); ?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white" href="shop-single.php"><i class="far fa-heart"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.php" class="h3 text-decoration-none"><?php echo $produit[$i]['nom']; ?></a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p class="text-center mb-0"><?php echo $produit[$i]['prix']; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>


        </div>
    </section>
    <!-- End Article -->
    <?php include 'footer.php';?>
    <script src="<?php echo js_loader('slick.min'); ?>"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
        function insertPanier(idP,nom,pr,img){
    //console.log("soa");
    if(document.getElementById(idP).value<0 || document.getElementById(idP).value==""){
      //  alert("Quantite non valide");
        var a=document.getElementById("erreur");
        a.innerHTML="Quantite non valide";
    }else{
        var tab = [];
        let pan = {
            idProduit : idP,
            nomProduit : nom,
            qte : document.getElementById(idP).value,
            image : img,
            pu : pr
        }
        console.log("soa");
        if(localStorage.getItem("pannier") != undefined){
            tab = JSON.parse(localStorage.getItem("pannier"));
        }else{
            localStorage.setItem("pannier",JSON.stringify(pan));
            alert("Pannier ajouter!");
        }
        
        tab.push(pan);
        localStorage.setItem("pannier",JSON.stringify(tab));
        alert("Pannier ajouter!");
    }
    console.log(localStorage.getItem("pannier"));
    //localStorage.clear();
}

    </script>