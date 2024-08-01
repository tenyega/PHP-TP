<?php
$promos = getPromotions();

?>
<h1 class="title">PROMOTIONS</h1>

<div class="mx-auto position-relative gallery-container line">
    <div class="circle intro-circle-1"></div>
    <div class="circle intro-circle-2"></div>
    <div class="mx-auto tm-border-top gallery-slider">

        <?php foreach ($promos as $promo) : ?>
            <div class="card">
                <figure class="effect-julia item">
                    <div class="promo-tag">Promo</div>

                    <img src="img/<?php echo  $promo['image'] ?>" alt="Image">
                    <figcaption>
                        <div>
                            <p style="border-radius: 15px; background: #364d63cc; color: white;">
                                <?php echo strtoupper($promo['designation']) ?>
                            </p>
                        </div>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <div class="card-details">
                    <p class="details">
                        <?php echo strtoupper($promo['designation']) ?><br>
                        <?php echo $promo['categorie'] ?><br>
                        Model: <?php echo $promo['modele'] ?>


                    <div class="newPrice">New Price: <?php echo $promo['prix'] ?> €</div>
                    <div style="text-decoration: line-through; color:red">
                        Price: <?php echo $promo['prix'] ?> €

                    </div>


                    </p>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</div>