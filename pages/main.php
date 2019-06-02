<?php

require_once ('./common/connexionBase.php');


$stmt = $connection->prepare("SELECT url_affiche, id FROM `film`");
$stmt->execute();
$lesUrls = $stmt->fetchall();

?>

<a href="#home" class="scrollToTop" id="myBtn"><i class="fas fa-arrow-up"></i></a>

<div class="container">

    <div class="row">
        <div class="col-3"><i class=" fas fa-search fa-2x"></i></div>
        <input class="col-9" type="text" name="recherche" id="recherche" placeholder="Recherche" value="">
        <div id="resultatRecherche"></div>

    </div>
    <div class="row mt-5">

        <form action="" method="post">



        </form>


<?php

foreach($lesUrls as $url) {

?>


<div class="col-12 col-md-4 d-flex justify-content-center pb-4 "><?php echo '<a href="film.php?id='.$url["id"].'">'?><img src="<?php echo $url['url_affiche'];?>" alt="Image"></a></div>




<?php
}
?>

    </div>
</div>