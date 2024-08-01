<?php

$products = getProducts();
?>
<h1 class="title">PRODUCTS</h1>
<div class="mx-auto position-relative gallery-container line">
    <div class="circle intro-circle-1"></div>
    <div class="circle intro-circle-2"></div>
    <div class="mx-auto tm-border-top gallery-slider">

        <?php foreach ($products as $product) : ?>
            <div class="card">
                <figure class="effect-julia item">
                    <?php if ($product['promotion']) {
                    ?><div class="promo-tag">Promo</div>
                    <?php }  ?>
                    <img src="img/<?php echo  $product['image'] ?>" alt="Image">
                    <figcaption>
                        <div>
                            <p style="border-radius: 15px; background: #364d63cc; color: white;">
                                <?php echo strtoupper($product['designation']) ?>
                            </p>
                        </div>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <div class="card-details">
                    <p class="details">
                        <?php echo strtoupper($product['designation']); ?><br>
                        <?php echo ucfirst($product['categorie']); ?><br>
                        Model: <?php echo ucfirst($product['modele']); ?>

                        <?php if ($product['promotion']) {
                        ?>
                    <div class="newPrice">New Price: <?php echo $product['prix'] * 0.8 ?> €</div>
                    <div style="text-decoration: line-through; color:red">
                        Price: <?php echo $product['prix'] ?> €

                    </div>

                <?php } else { ?><br>
                    <p style="color: black;font-weight: 900; background-color:#0000ff63; border-radius:15px; padding:0.5rem;">Price: <?php echo $product['prix'] ?> €<br></p><?php } ?>


                </p>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</div>