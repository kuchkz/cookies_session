<?php require 'inc/head.php'; ?>
<?php
if (!empty($_SESSION['cookie'])) {
    $cookies = array_count_values($_SESSION['cookie']);
}
?>
    <section class="cookies container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Pecan nuts</h3>
                        <p>Cooked by Penny !</p>
                        <p>Quantité  :  <?php echo isset($cookies[46])? $cookies[46] : 0 ?></p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate chips</h3>
                        <p>Cooked by Bernadette !</p>
                        <p>Quantité  :  <?php echo isset($cookies[36])? $cookies[36] : 0 ?></p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate cookie</h3>
                        <p>Cooked by Bernadette !</p>
                        <p>Quantité  :  <?php echo isset($cookies[58])? $cookies[58] : 0 ?></p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>M&M's&copy; cookies</h3>
                        <p>Cooked by Penny !</p>
                        <p>Quantité  :  <?php echo isset($cookies[32])? $cookies[32] : 0 ?></p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
<?php require 'inc/foot.php';
