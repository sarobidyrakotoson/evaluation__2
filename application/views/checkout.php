<?php include 'header.php';?>
    <!-- Start Content Page -->
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
            <form class="col-md-9 m-auto" method="post" role="form">
            <div class="mb-3">
                    <label for="inputmessage">Addresse</label>
                    <textarea class="form-control mt-1" id="message" name="address" placeholder="addresse" rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Email</label>
                        <input type="text" class="form-control mt-1" id="name" name="email" placeholder="email">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Contact</label>
                        <input type="email" class="form-control mt-1" id="email" name="contact" placeholder="Contact">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Mode de paiement</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">
                </div>
                
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Let’s Talk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->
    <?php include 'footer.php';?>