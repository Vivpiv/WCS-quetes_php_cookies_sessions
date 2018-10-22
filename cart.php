<?php require 'inc/head.php';
if (!isset($_SESSION['prenom'])) {
    header("location:login.php");
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        $defCart = array_count_values($_SESSION["cart"]);
        foreach ($defCart as $key => $value) {
            echo "<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                      <figure class=\"thumbnail text-center\">
                        <img src=\"assets/img/product-".$key.".jpg\" alt=\"cookies choclate chips\" class=\"img-responsive\">
                        <figcaption class=\"caption\">

                          <p>nombre = ".$value."</p>
                          
                        </figcaption>
                      </figure>
                    </div>";
        }

        
        
        
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
