<h1 class="title">CATEGORIES</h1>

<div class="mx-auto position-relative gallery-container line">
    <div class="circle intro-circle-1"></div>
    <div class="circle intro-circle-2"></div>
    <div class="mx-auto tm-border-top gallery-slider">

        <?php
        $categories = getCategories();
        foreach ($categories as $categorie) : ?>
            <div class="categoryTitle"> <?php echo strtoupper($categorie); ?><br> </div>
            <?php
            $categoryDetails = getCategoryDetail($categorie);
            foreach ($categoryDetails as $categoryDetail) :
            ?>
                <div class="card category">
                    <figure class="effect-julia item">
                        <?php if ($categoryDetail['promotion']) {
                        ?><div class="promo-tag">Promo</div>
                        <?php }  ?>
                        <img src="img/<?php echo  $categoryDetail['image'] ?>" alt="Image">
                        <figcaption>
                            <div>
                                <p style="border-radius: 15px; background: #364d63cc; color: white;">
                                    <?php echo strtoupper($categoryDetail['designation']) ?>
                                </p>
                            </div>
                            <a href="#">View more</a>
                        </figcaption>
                    </figure>
                    <div class="card-details">
                        <p class="details">
                            <?php echo strtoupper($categoryDetail['designation']); ?><br>
                            <?php echo ucfirst($categoryDetail['categorie']); ?><br>
                            Model: <?php echo ucfirst($categoryDetail['modele']); ?>

                            <?php if ($categoryDetail['promotion']) {
                            ?>
                        <div class="newPrice">New Price: <?php echo $categoryDetail['prix'] * 0.8 ?> €</div>
                        <div style="text-decoration: line-through; color:red">
                            Price: <?php echo $categoryDetail['prix'] ?> €

                        </div>

                    <?php } else { ?><br>
                        <p style="color: black;font-weight: 900; background-color:#0000ff63; border-radius:15px; padding:0.5rem;">Price: <?php echo $categoryDetail['prix'] ?> €<br></p><?php } ?>


                    </p>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endforeach ?>
    </div>
</div>