<div class="title-section">
    <h2>Productos Destacados</h2>
</div>
<ul>
    <?php
        for($i=1; $i<=4; $i++){
            ?>
            <li>
                <article class="card product">
                    <figure>
                        <a href="#">
                            <img src="assets/img/Mieltertos-noche-sachet-15g.webp" class="card-img-top" alt="Salud" width="258" height="258">
                            <figcaption>Mieltertos Noche sachet 15 g</figcaption>
                        </a>
                    </figure>
                    <div class="card-body description">
                        <h2 class="title-product">Mieltertos Noche sachet 15 g</h2>
                        <span class="category-product">Sachets</span>
                        <div class="price-product">
                            <span class="price-before">$2.600</span>
                            <span class="price-after">$2.300</span>
                        </div>
                        <button type="button" class="btn btn-dark quick-view" data-bs-toggle="modal" data-bs-target="#quickView">Vista Rapida</button>
                        <button class="btn btn-primary cart">
                            Añadir al Carrito
                            <i class="bi bi-cart4"></i>
                        </button>
                    </div>
                </article>
            </li>
            <?php
        }
    ?>
</ul>

<?php include "quick-view.html"?>