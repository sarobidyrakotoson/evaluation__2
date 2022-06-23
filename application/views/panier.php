<?php include 'header.php';?>
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">


            <div class="col-lg-9">
                <div class="row">
                </div>
                <div class="row">
                   
                <script>
                        var tab=JSON.parse(localStorage.getItem("pannier"));
                        console.log(tab);
                        var tab1 = JSON.stringify( tab );
                        document.cookie = "tab="+tab1;
                    </script>
                    <?php $a = json_decode( $_COOKIE['tab'], true );
                   //var_dump(count($a)); ?>
                    <table>
                    <thead>
                        <tr>
                            <th>produit</th>
                            <th>quantite</th>
                            <th>prix total</th>
                            <th>photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="<?php echo site_url('Welcome/modifier'); ?>" method ="post">
                        <?php for($i=0;$i<count($a);$i++){
                             ?>
                        <tr>
                            <td> <?php echo $a[$i]['nomProduit']; ?></td>
                            <td><input type="number" class="form-control mt-1" style="border-color: white;width: 80px" name="val<?php echo $i; ?>" value="<?php echo $a[$i]['qte']; ?>" id=""></td>
                            <td><?php echo $a[$i]['qte']*$a[$i]['pu']; ?></td>
                            <td><img src="http://localhost/evaluation2/assets/img/<?php echo $a[$i]['image']; ?>" alt="" style="width: 100px"></td>
                            <td> <a href="javascript:deletePanier(<?php echo $a[$i]['idProduit']; ?>)"> <i class="fa fa-fw fa-trash text-dark mr-1"></i></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>

                    </table>
                    <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">MODIFIER</button>
                        <a  class="btn btn-success btn-lg" href="<?php echo site_url('Welcome/login'); ?>">
                                       VALIDER L'ACHAT</a>
                    </div>
                    </form>
                </div>
                </div>
               
            </div>

        </div>
    </div>
    <script>
    
        function deletePanier(idP){
            var tab = [];
            tab = JSON.parse(localStorage.getItem("pannier"));
            for (var key in tab) {
            if (tab[key]['idProduit'] == idP) {
                tab.splice(key, 1);
            }
            localStorage.clear();
            localStorage.setItem("pannier",JSON.stringify(tab));
            }
            document.location.reload(true);

        }
    </script>
    <!-- End Content -->

    <!-- Start Brands -->
    <!--End Brands-->
    <?php include 'footer.php';?>